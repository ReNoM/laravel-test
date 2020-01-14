## Task

Make a service "message wall" using the provided HTML template.

Technologies: PHP, Laravel.

## Main page

### Contents
A message list, split messages horizontally.
Message block: message text, author.
If the visitor is logged in, then display a new message form.
If the user sent an empty message, display an error message "The message mustn't be empty". The error message must be displayed nearby the message input field.
When the message is accepted, display the updated message list.

### Sorting
By date (newest first)

## Authentication
If invalid credentials were provided, display an error message.

## Registration
Email and password validation is up to the programmer.
If there are validation errors, display each error nearby a corresponding input field.

## Main menu
### Placement
At the top of the page

### Items
Wall: directs to the main page.
Authentication and registration: are displayed only for non-authenticated visitors.
Username (logout): is displayed for authenticated visitors at the right, log out on click.
