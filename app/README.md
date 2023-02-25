# Darak Project
## Information
- The minimum PHP version is 8.0, Codeigniter 4.
## How to use
- Change the env file in the project root folder to .env.
- Insert database account information (Wizard files will be provided later)
- Run `composer install`
## File Naming Method
Please observe the naming method below when contributing or participating in the project.
### Routing
- Write the file name in lowercase letters, and use a bar ('-') if spaces are needed (kebab-case).
- The routing file is located at `app/Config/Routes.php`.
- Except in special cases. (ActivityPub, Webfinger, well-known, etc.)
### Controller
- For directory names and file names, the first letter is capitalized, and each word between words is written in capital letters (PascalCase).
- `Controller` must be inserted after the controller file. (ex: WebfingerController.php).
- Directory names and file names are written in the singular.
  - (x) Member`s`Controller.php
  - (o) MemberController.php
- The directory is located at `app/Controllers`.
### Model
- The rules are the same as Controller.
- `Model` must be inserted after the model file. (ex: PizzaOrderListModel.php).
- Directory names and file names are written in the singular.
    - (x) Member`s`Model.php
    - (o) MemberModel.php
- The directory is located at `app/Models`.
### View
- All directory names and file names are written in lowercase, with underscores ('_') between words. (snake_case)
- `View` is not indicated separately in the file name.
- The directory is located at `app/Views`.
  - member/mypage.php
  - member/pizza_order.php