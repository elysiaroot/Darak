<?php

namespace App\Controllers;

class WellKnownController extends BaseController {
    /**
     * host-meta Function
     *
     * This is an Internet Standards Track document.
     * rfc : https://www.rfc-editor.org/rfc/rfc6415
     *
     * @return string    host-meta template return
     */
    public function HostMeta(): string
    {
        $this->response->setContentType('application/xrd+xml; charset=utf-8');
        return view('well-known/host-meta');
    }

    /**
     * WebFinger Function
     *
     * This is an Internet Standards Track document.
     * rfc : https://www.rfc-editor.org/rfc/rfc7033.html
     *
     * @return string|bool
     */
    public function WebFinger(): string
    {
        $template = [
            'subject'=>'acct:abcd@domain.com',
            'aliases'=>[
                env('app.baseURL').'/@abcd',
                env('app.baseURL').'/users/abcd',
            ],
            'links'=>[
                [
                    'rel'=>'http://webfinger.net/rel/profile-page',
                    'type'=>'text/html',
                    'href'=>env('app.baseURL').'/@abcd',
                ],
                [
                    'rel'=>'self',
                    'type'=>'application/activity+json',
                    'href'=>env('app.baseURL').'/users/abcd',
                ],
                [
                    'rel'=>'http://ostatus.org/schema/1.0/subscribe',
                    'template'=>env('app.baseURL').'/authorize_interaction?uri={uri}'
                ]
            ]
        ];

        return $this->responseJSON($template);
    }
}