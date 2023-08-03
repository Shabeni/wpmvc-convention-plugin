# WordPress Convention Plugin with WPMVC

## Description

This WordPress plugin, built using the WPMVC framework, allows you to create and manage conventions and their associated types. It provides an intuitive user interface in the WordPress admin area to add, edit, and delete conventions and types, making it easy to organize and display different types of events, conferences, or gatherings on your website.

## Features

- Create and manage conventions: Add new conventions with details such as title, description, date (automatic).

- Organize types: Categorize conventions by adding types like "Conference," "Workshop," "Exhibition," etc.

- User-friendly admin interface: The plugin integrates seamlessly with the WordPress admin dashboard for easy management.

## Installation

1. Download the plugin ZIP file from the GitHub repository or from the WordPress plugin directory.

2. Log in to your WordPress admin dashboard.

3. Navigate to "Plugins" > "Add New."

4. Click on the "Upload Plugin" button.

5. Choose the downloaded ZIP file and click "Install Now."

6. Once installed, click "Activate" to activate the plugin.

### Using XAMPP:

If you are using XAMPP to run WordPress locally, you need to place the plugin in the correct location in your XAMPP installation.

1. Navigate to your XAMPP installation directory (usually C:\xampp).

2. Inside the XAMPP directory, go to `htdocs/wordpress/wp-content/plugins/`.

3. Extract the plugin files from the ZIP file you downloaded earlier.

4. Move the extracted plugin folder (`wordpress-wpmvc-convention-plugin`) into the plugins directory.

5. After moving the plugin folder, you should have a path like this: `C:\xampp\htdocs\wordpress\wp-content\plugins\convention`

6. Now, go back to your WordPress admin dashboard, navigate to "Plugins," and you should see the `wpmvc` and `convention` plugins. You should activate `wpmvc` first, then `convention`.

## Usage

### Adding Conventions:

1. In the WordPress admin area, navigate to "Conventions" in the left sidebar menu.

2. Click on "Add New" to create a new convention.

3. Fill in the convention details, such as title and description.

4. Assign a type to the convention by choosing it from the list.

5. Click "Ajouter" to save the convention.

### Adding Types with a "Name" Field:

1. To add a new type with a "name" field, navigate to "Types" in the left sidebar menu.

2. Click on "Add New" to create a new type.

3. In the "Name" field, enter the name of the type (e.g., "Conference," "Workshop," "Exhibition").

4. Click "Add" to save the new type.

5. Now, when you create or edit a convention, you can assign the newly added type with the "name" field to the convention.

### Managing Conventions:

- To edit an existing convention, navigate to "Conventions" in the left sidebar menu and click "Edit" on the convention you want to modify.

- Make the necessary changes and click "Ajouter" to save the changes.

### Displaying Conventions on Your Website:

To display the conventions using DataTables on your website, follow these steps:

1. Make sure you have activated the "WordPress Convention Plugin with WPMVC" in your WordPress admin dashboard.

2. After activating the plugin, open your web browser and enter the following URL: `http://localhost/your-wordpress-folder/conventions/`

   Replace "your-wordpress-folder" with the name of the folder where you have installed WordPress using XAMPP.

3. Once you access the above URL, you will see a DataTables display showing all the conventions in your database.

4. The DataTables display will provide features like search, sorting, pagination, and more, making it easy to navigate through the conventions data.

5. If you have assigned types to conventions, the DataTables display will also include a column showing the convention types.

Enjoy managing and showcasing your conventions seamlessly using this plugin!
