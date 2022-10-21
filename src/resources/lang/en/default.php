<?php
return array_merge([
    // Responses
    'created_response' => ':name has been created successfully',
    'updated_response' => ':name has been updated successfully',
    'deleted_response' => ':name has been deleted successfully',
    'failed_response' => 'Something went wrong',
    'notified' => ':name has been notified successfully',
    'duplicated_response' => ':name has been duplicated successfully',
    'status_updated_response' => ':name status has been changed to :status',
    'action_not_allowed' => 'You are not allowed for this action',
    'cant_delete_own_account' => 'You can\'t delete your own account',
    'attached_response' => ':name has been attached successfully',
    'detached_response' => ':name has been detached successfully',
    'default_delete' => 'You can not delete the default :name .',
    'default_update' => 'You can not update the default :name',
    'old_password_is_in_correct' => 'Old password is incorrect',
    'attach_log' => 'New :pivot attached to :model',
    'detach_log' => ':pivot detached from :model',
    'status_log' => ':model has been :status',
    'incorrect_user_password' => 'Incorrect user or password',
    'invite_user_response' => 'User has been invited successfully',
    'invalid_token' => 'The token is Invalid',
    'user_account_confirmed' => 'Your account has been confirmed successfully',
    'user_invited_to_join' => 'An user has been invited to join',
    'user_confirm_joining' => 'User confirmed his joining',
    'log_description_message' => ':model has been :event',
    'password_reset_mail_has_been_sent_successfully' => 'We sent an email containing password reset link to your email address. Please check it',
    'no_user_found_on_that_email' => 'No user found of that email address.',
    'password_has_been_reset_successfully' => 'Your password has been reset successfully',
    'resource_not_found' => 'The :resource you are looking for is not found.',
    'created' => 'Created',
    'deleted' => 'Deleted',
    'updated' => 'updated',
    'resource' => 'resource',
    'csrf_token_mismatch_message' => 'Maybe you are in a frame. Please remove the frame and try again',

    // Number of Decimal
    '0' => 'ZERO (0)',

    //HTTP Responses
    '200' => 'Success',

    //Number of Decimal
    '2' => 'TWO (2)',

    // HTTP Responses
    '400' => 'Bad Request',
    '401' => 'Unauthorized',
    '403' => 'Forbidden',
    '404' => 'Not Found',
    '413' => 'Payload too large',
    '414' => 'URI Too long',
    '415' => 'Unsupported Media Type',
    '426' => 'Upgrade Required',
    '429' => 'Too Many Requests',


    // Features

    // Custom Field Builder
    'custom_field' => 'Custom field',
    'custom_field_type' => 'Custom field Type',

    // Fields
    'text' => 'Textbox',
    'textarea' => 'Textarea',
    'checkbox' => 'Checkbox',
    'radio_button' => 'Radio Button',
    'select' => 'Select',
    'multi_select' => 'Multi Select',
    'did_not_match_anything' => "Didn't match anything",
    'enter_to_add_new' => 'Enter to add new',
    'no_options_found' => 'No options found',
    'pick_a_color' => 'Pick a color',

    // Notification event
    'notification_event_name' => ':name :action',
    'notification_created' => 'created',
    'notification_updated' => 'updated',
    'notification_deleted' => 'deleted',
    'notification_user' => 'user',
    'notification_reset' => 'reset',
    'notification_invited' => 'invited',

    // Notifications
    'notification' => 'Notification',
    'notify_by_email' => 'Notify by Email',
    'notify_by_sms' => 'Notify by SMS',
    'notification_settings' => 'Notification settings',
    'notification_template' => 'Notification template',

    // Labels
    'user' => 'User',
    'brand' => 'Brand',
    'status' => 'Status',
    'name' => 'Name',
    'email' => 'Email',
    'mail' => 'Mail',
    'value' => 'Value',
    'type' => 'Type',
    'database' => 'System',
    'sms' => 'SMS',
    'users' => 'Users',
    'roles' => 'Roles',
    'role' => 'Role',
    'permissions' => 'Permissions',
    'permission' => 'Permission',
    'settings' => 'Settings',
    'password' => 'Password',
    'show_password' => 'Show password',
    'hide_password' => 'Hide password',
    'allowed' => 'allowed',
    'profile_picture' => 'Profile picture',
    'delivery_settings' => 'Email settings',
    'brand_settings' => 'Brand settings',
    'privacy_settings' => 'Privacy settings',
    'corn_job' => 'Corn job',
    'brand_group' => 'Brand group',
    'template' => 'Template',
    'profile' => 'Profile',
    'log' => 'Log',
    'invite' => 'Invite',

    //Settings
    'app_name' => 'App Name',
    'brand_name' => 'Brand Name',

    // Status
    'status_active' => 'Active',
    'status_pending' => 'Pending',
    'status_deleted' => 'Deleted',
    'status_processing' => 'Processing',
    'status_sent' => 'Sent',
    'status_draft' => 'Draft',
    'status_regular' => 'Regular',
    'status_auto' => 'Auto',
    'status_dynamic' => 'Dynamic',
    'status_imported' => 'Imported',
    'status_black-listed' => 'Black listed',
    'status_inactive' => 'Inactive',

    // Permissions
    'manage_dashboard' => 'Can manage app dashboard',
    'view_users' => 'Can view list of user',
    'create_users' => 'Can create an user',
    'update_users' => 'Can update an user',
    'delete_users' => 'Can delete an user',
    'view_brands' => 'Can view list of brand',
    'create_brands' => 'Can create brand',
    'update_brands' => 'Can update brand',
    'delete_brands' => 'Can delete brand',
    'user_list_brands' => 'Can view users of a brand',
    'attach_users_brands' => 'Can attach user to brand',
    'detach_users_brands' => 'Can detach user from a brand',
    'brand_list_users' => 'Can view brands of a user',
    'manage_brand_dashboard' => 'Can view brand dashboard',
    'update_brand_privacy_settings' => 'Can update brand privacy from app',
    'view_brand_privacy_settings' => 'Can view brand privacy from app',
    'view_roles' => 'Can view list of role',
    'create_roles' => 'Can create role',
    'update_roles' => 'Can update role',
    'delete_roles' => 'Can delete role',
    'view_settings' => 'Can view list of setting',
    'update_settings' => 'Can update setting',
    'view_permission' => 'Can view list of permission',
    'view_custom_fields' => 'Can view list of custom field',
    'create_custom_fields' => 'Can create custom field',
    'update_custom_fields' => 'Can update custom field',
    'delete_custom_fields' => 'Can delete custom field',
    'attach_roles_users' => 'Can attach roles to users',
    'detach_roles_users' => 'Can detach roles from users',
    'attach_permissions_roles' => 'Can attach permissions to role',
    'detach_permissions_roles' => 'Can detach permissions from role',
    'change_settings_users' => 'Can change own settings',
    'settings_list_users' => 'Can view settings list',
    'change_password_users' => 'Can change user password',
    'change_profile_picture_users' => 'Can change profile picture',
    'update_delivery_settings' => 'Can update email settings',
    'update_corn_job_settings' => 'Can update corn job settings',
    'view_corn_job_settings' => 'Can view corn job settings',
    'view_delivery_settings' => 'Can view email settings',
    'view_brand_delivery_settings' => 'Can view brand delivery settings',
    'view_notification_settings' => 'Can view notification settings',
    'update_notification_settings' => 'Can update notification settings',
    'create_brand_groups' => 'Can create brand group',
    'view_brand_groups' => 'Can view brand group',
    'update_brand_groups' => 'Can update brand group',
    'delete_brand_groups' => 'Can delete brand group',
    'attach_brand_brand_groups' => 'Can attach brand to brand group',
    'detach_brand_brand_groups' => 'Can detach brand from brand group',
    'view_brands_brand_groups' => 'Can view brands of a brand group',
    'view_notification_templates' => 'Can view notification templates',
    'create_notification_templates' => 'Can create notification templates',
    'update_notification_templates' => 'Can update notification templates',
    'delete_notification_templates' => 'Can delete notification templates',
    'attach_templates_notification_events' => 'Can attach templates to notification event',
    'detach_templates_notification_events' => 'Can detach templates to notification event',
    'view_activity_logs' => 'Can view activity log',
    'view_templates' => 'Can view templates',
    'create_templates' => 'Can create templates',
    'update_templates' => 'Can update templates',
    'delete_templates' => 'Can delete templates',
    'invite_user' => 'Can invite user',

    'date_format' => 'date format',
    'time_format' => 'time format',
    'decimal_separator' => 'decimal separator',
    'thousand_separator' => 'thousand separator',
    'number_of_decimal' => 'number of decimal',
    'currency_position' => 'currency position',

    // Language
    'en' => 'English',

    // Date Format
    'dd-mm-yyyy' => 'DD-MM-YYYY',
    'd-m-Y' => 'DD-MM-YYYY',
    'm-d-Y' => 'MM-DD-YYYY',
    'Y-m-d' => 'YYYY-MM-DD',
    'm/d/Y' => 'MM/DD/YYYY',
    'd/m/Y' => 'DD/MM/YYYY',
    'Y/m/d' => 'YYYY/MM/DD',
    'm.d.Y' => 'MM.DD.YYYY',
    'd.m.Y' => 'DD.MM.YYYY',
    'Y.m.d' => 'YYYY.MM.DD',

    // Time Format
    'h' => '12 HOURS',
    'H' => '24 HOURS',

    // Decimal and Thousand Separator
    '.' => 'DOT(.)',
    ',' => 'COMMA(,)',
    ' ' => 'Space',

    // Currency Positions
    'prefix_only' => '$1,100.00',
    'prefix_with_space' => '$ 1,100.00',
    'suffix_only' => '1,100.00$',
    'suffix_with_space' => '1,100.00 $',

    // Validation
    "is_required" => "is required",
    "and" => "and",
    "this_field_is_required" => "This field is required",
    "this_field_is_invalid" => "This field is invalid",
    "this_field_is_not_alphanumeric" => "This field is not alphanumeric",
    "passwords_are_not_matched" => "Passwords are not matched",
    "please_enter_a_strong_password" => "Please enter a strong password.",
    "are_not_match" => "are not match",
    "can_not_before" => "can not before",
    "is_invalid" => "is invalid",
    "minimum_length_is" => "Minimum length is",
    "maximum_length_is" => "Maximum length is",
    "maximum_number_is" => "Maximum number is",
    "minimum_number_is" => "Minimum number is",
    "is_not_alphanumeric" => "is not alphanumeric",
    "not_found" => "Not found",

    // Btn
    "load_more" => "Load more",
    "apply" => "Apply",
    "clear" => "Clear",
    "close" => "Close",
    "yes" => "Yes",
    "no" => "No",
    "more" => "more",
    "actions" => "Actions",

    // Multi select component
    "add" => "add",

    // Datatable
    "items_showing_per_page" => 'Items showing per page',
    "items_selected" => "items selected",
    "select_all" => "Select all",
    "clear_selection" => "Clear selection",
    "showing" => "Showing",
    "to" => "to",
    "items" => "items",
    "of" => "of",
    "go_to_page" => "Go to page",
    "loading" => "Loading",
    "next_five_pages" => "Next 5 pages",
    "previous_five_pages" => "Previous 5 pages",
    "click_to_highlights" => "Click to highlights",

    // Filters
    "filters" => "Filters",
    "minimum_rate" => "Minimum rate",
    "maximum_rate" => "Maximum rate",
    "want_to_manage_datatable" => "Want to manage datatable?",
    "please_drag_and_drop_your_column_to_reorder_your_table_and_enable_see_option_as_you_want" => "Please drag and drop your column to reorder your table and enable see option as you want.",
    "manage_columns" => "Manage Columns",
    "search" => "Search",
    "today" => "Today",
    "date" => "Date",
    "select_an_option" => "Select an option",
    "clear_all_filters" => "Clear all filters",
    "sort_by" => "Sort by",
    "saved_filter" => "Saved filter",
    "filter_name" => "Filter name",
    "save_current_filter_state" => "Save current filter state",
    "select_form_previous_state" => "Choose from previous filter state",
    "at_least_one_filter_should_have_selected" => "At least one filter should have selected",
    "filter_saved_instruction" => "You can choose from your previous saved filter. Or you can save current filter state for future.",

    // Modal
    "are_you_sure" => "Are you sure?",
    "this_content_will_be_deleted_permanently" => "This content will be deleted permanently.",

    // Empty data
    "nothing_to_show_here" => "Nothing to show here",
    "thank_you" => "Thank you",
    "go_back_to_your_page" => "Go back to your page",
    "something_went_wrong" => "Something went wrong!",
    "empty_data_block_dummy_message" => "Please add a new entity or manage the data table to see the content here",

    // File upload
    "change_image" => "Change Image",
    "choose_file" => "Choose File",
    "drag_and_drop" => "Drag & Drop",
    "or" => "or",
    "browse" => "Browse",

    // No notification
    "no_notification_one" => "It's very much boring to do as usual stuff, let's have a party with some beer!",
    "no_notification_two" => "Are you hungry there? Please have good food and get back to work.",
    "no_notification_three" => "Rock & role time! Turn on your music and have some fun with your team.",
    "all_notifications" => "All Notifications",

    // Tooltip titles
    "collapse_sidebar" => "Collapse sidebar",
    "floating_sidebar" => "Floating sidebar",
    "full_sidebar" => "Full sidebar",
    "light_mood" => "Light mood",
    "dark_mood" => "Dark mood",
    "fullscreen" => "Fullscreen",
    "exit_fullscreen" => "Exit fullscreen",

    // Tenant Preview Card
    "invited_by" => "Invited by",
    "short_name" => "Short name",
    "group" => "Group",
    "go_to_dashboard" => "Go To Dashboard",
    "user_invitation_canceled_successfully" => "User invitation canceled successfully.",

    // Time - picker input
    "am" => "AM",
    "pm" => "PM",

    // Payment Methods
    "payment_methods" => "Payment methods",
    "payment_method" => "Payment method",
    "mark_as_default" => "Mark as default",
    "is_for_client" => "Available for Client",
    "public_key" => "Public key",
    "client_id" => "Client id",
    "view_payment_method" => "Can view payment method",
    "update_payment_method" => "Can update payment method",
    "delete_payment_method" => "Can delete payment method",
    "add_payment_method" => "Add payment method",
    "mode" => "Mode",
    'cash' => 'Cash',
    'credit' => 'Credit',
    'paypal' => 'Paypal',
    'stripe' => 'Stripe',
    'none' => 'None',
    'live' => 'Live',
    'sandbox' => 'Sandbox',
    'make_paypal_payment' => 'Make Paypal Payment',
    'make_stripe_payment' => 'Make Stripe Payment',
    'payment_status' => 'Payment Status',

    // Billar App
    'dashboard' => 'Dashboard',
    'clients' => 'Clients',
    'invoices' => 'Invoices',
    'payments' => 'Payments',
    'products' => 'Products',
    'reports' => 'Reports',
    'yearly_income_overview' => 'Yearly income overview',
    'payment_overview' => 'Payment overview',
    'paid_invoices' => 'Paid invoices',
    'unpaid_invoices' => 'Unpaid invoices',
    'overdue_invoices' => 'Overdue invoices',
    'partially_paid' => 'Partially paid',
    'add_client' => 'Add client',
    'edit_client' => 'Edit client',
    'clients_table' => 'Clients Table',
    'reference' => 'Reference',
    'country' => 'Country',
    'are_you_sure_to_delete_this_client' => 'Are you sure to delete this client',
    'client_number' => 'Client number',
    'enter_client_number' => 'Enter client number',
    'enter_client_name' => 'Enter client name',
    'enter_client_email' => 'Enter client email',
    'enter_contact_number' => 'Enter contact number',
    'address' => 'Address',
    'enter_address' => 'Enter address',
    'city' => 'City',
    'enter_city_name' => 'Enter city name',
    'state' => 'State',
    'enter_state_name' => 'Enter state name',
    'postal_code' => 'Postal code',
    'enter_postal_code' => 'Enter postal code',
    'choose_country' => 'Choose country',
    'website' => 'Website',
    'enter_website_url' => 'Enter website url',
    'notes' => 'Notes',
    'enter_a_note' => 'Enter a note',
    'enter_a_password' => 'Enter a password',
    'confirm_password' => 'Confirm password',
    're_enter_password' => 'Re-enter password',
    'add_more_address' => 'Add more address',
    'client_details' => 'Client details',
    'invoice_number' => 'Invoice number',
    'due_date' => 'Due date',
    'amount' => 'Amount',
    'invoice_details' => 'Invoice details',
    'download' => 'Download',
    'send' => 'Send',
    'to' => 'To',
    'from' => 'From',
    'enter_email_address' => 'Enter email address',
    'subject' => 'Subject',
    'enter_subject' => 'Enter subject',
    'type_your_message' => 'Type your message',
    'invoice_tags' => 'Invoice tags',
    'client_tags' => 'Client tags',
    'company_tags' => 'Company tags',
    'user_tags' => 'User tags',
    'send_invoice' => 'Send invoice',
    'new_invoice' => 'New invoice',
    'add_invoice' => 'Add invoice',
    'edit_invoice' => 'Edit invoice',
    'paid' => 'Paid',
    'amount_due' => 'Amount due',
    'add_payment' => 'Add payment',
    'edit_payment' => 'Edit payment',
    'are_you_sure_to_delete_this_invoice' => 'Are you sure to delete this invoice',
    'choose_a_client' => 'Choose a client',
    'currency' => 'Currency',
    'choose_a_currency' => 'Choose a currency',
    'client' => 'Client',
    'recurring' => 'Recurring',
    'recurring_cycle' => 'Recurring cycle',
    'choose_a_status' => 'Choose a status',
    'choose_a_recurring_cycle' => 'Choose a recurring cycle',
    'choose_a_product' => 'Choose a product',
    'add_quantity' => 'Add quantity',
    'add_price' => 'Add price',
    'add_more' => 'Add more',
    'terms' => 'Terms',
    'invoice' => 'Invoice',
    'choose_an_invoice' => 'Choose an invoice',
    'received_on' => 'Received on',
    'choose_a_payment_method' => 'Choose a payment method',
    'are_you_sure_to_delete_this_payment' => 'Are you sure to delete this payment',
    'are_you_sure_to_delete_this_product' => 'Are you sure to delete this product',
    'image' => 'Image',
    'code' => 'Code',
    'category' => 'Category',
    'price' => 'Price',
    'new_products' => 'New product',
    'unit_price' => 'Unit price',
    'description' => 'Description',
    'add_product' => 'Add product',
    'edit_product' => 'Edit product',
    'product_image' => 'Product image',
    'recommended_product_size' => 'Recommended size W: 150 x H: 120',
    'choose_image' => 'Choose image',
    'choose_a_category' => 'Choose a category',
    'add_category' => 'Add category',
    'categories' => 'Categories',
    'new_category' => 'New category',
    'are_you_sure_to_delete_this_category' => 'Are you sure to delete this category',
    'general_summary' => 'General summary',
    'payments_summary' => 'Payment summary',
    'client_statement' => 'Client statement',
    'invoice_report' => 'Invoice report',
    'expense_report' => 'Expense report',
    'balance' => 'Balance',
    'invoice_logo' => 'Invoice logo',
    'invoice_starting_number' => 'Invoice starting number',
    'invoice_terms' => 'Invoice terms',
    'show_status' => 'Show status',
    'show_pay_button' => 'Show pay button',
    'add_tax' => 'Add tax',
    'edit_tax' => 'Edit tax',
    'tax_name' => 'Tax name',
    'tax_value' => 'Tax value',

    //install
    'app_installed_successfully' => 'App install successfully',
    'invalid_purchase_code' => 'Invalid purchase code',
    'install' => 'Install',
    'database_configuration' => 'Database configuration',
    'db_connection' => 'Database connection',
    'database_hostname' => 'Database hostname',
    'database_port' => 'Database port',
    'database_name' => 'Database name',
    'database_username' => 'Database username',
    'database_password' => 'Database password',
    'password_requirements' => 'Password requirements',
    'password_requirements_message' => 'The password should contain one upper case, one lower case, one special character, and numbers. It should be a minimum of 8 characters.',
    'purchase_code' => 'purchase_code',
    'admin_login_details' => 'Admin login details',
    'enter_database_hostname' => 'Database hostname',
    'enter_database_port' => 'Enter database port',
    'enter_database_name' => 'Enter database name',
    'enter_database_username' => 'Enter database username',
    'enter_database_password' => 'Enter database password',
    'enter_code' => 'Enter code',
    'enter_name' => 'Enter name',
    'enter_email' => 'Enter email',
    'enter_password' => 'Enter password',
    'enter_confirm_password' => 'Enter confirm password',

    //update
    'update_warning' => '1. Please backup all files and database before start the installation of updates (including language files if you are using custom_lang.php file to overwrite translation text) and review the changelog.
                    <br> 2. You must install the previous versions to update the new version.',
    'no_updates_found' => 'No update found.',
    'subject_for_this_email' => 'subject for this email',
    'please_update_your_php_version_to_number' => 'Please update your php version to :number',
    'public_directory_must_be_writeable_to_update_the_app' => 'Server must have the permission to write in root directory of app and public directory in order to update the app.',
    'install_zip_extension' => 'Zip extension is required in order to update the apps.',
    'please_install_version_first' => 'Please install version :number first.',
    'version_installed_successfully' => ':version installed successfully.',
    'You are using version' => 'You are using :version.',
    'no_new_update_found' => 'No new update found.',
    'change_log' => 'Change log',
    'this_will_update_entire_app' => 'This action will update the app to the selected version.',

    //expense
    'expenses' => 'Expenses',
    'expense' => 'Expense',
    'add_expense' => 'Add Expense',
    'this_month' => 'This month',
    'this_week' => 'This week',
    'back_to_expense' => 'Back to expense',

    //Purposes
    'purposes' => 'Purposes',
    'purpose' => 'Purpose',
    'expense_purpose' => 'Expense purpose',
    'select_expense_purpose' => 'Select expense purpose',
    'select_purpose_type' => 'Select purpose type',
    'enter_amount' => 'Enter amount',
    'enter_date' => 'Enter date',
    'enter_note' => 'Enter note',
    'enter_reference' => 'Enter reference',
    'new_purpose' => 'New purpose',


], include 'custom.php');
