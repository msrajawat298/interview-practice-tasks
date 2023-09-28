# Shades of Web: Task - Test Problem

This repository contains a PHP web application that fetches data from an external source and displays it on a web page. The data is retrieved using a cURL call, and it is displayed in two sections: "COMMUNITIES WE MANAGE" and "OUR SERVICES."

## Table of Contents

- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [File Structure](#file-structure)
- [Dependencies](#dependencies)
- [Contributing](#contributing)
- [License](#license)

## Prerequisites

Before you can run this web application, make sure you have the following prerequisites installed on your system:

- PHP: You need to have PHP installed. You can download it from the [official PHP website](https://www.php.net/downloads.php).

## Installation

1. Clone this repository to your local machine:

   ```git clone https://github.com/your-username/your-repository.git```

2. Navigate to the project directory:

   ```
   cd your-repository
   ```

3. Place the `functions.php` file in the same directory as the PHP files.

## Usage

1. Start a local PHP server:

   ```php -S localhost:8000```

2. Open your web browser and navigate to `http://localhost:8000`.

3. You should see the web page titled "Shades of Web: Task - Test Problem" with two sections: "COMMUNITIES WE MANAGE" and "OUR SERVICES."

4. The "COMMUNITIES WE MANAGE" section displays data fetched from an external source using a cURL call. It shows information about different communities.

5. The "OUR SERVICES" section also displays data from the same source in a carousel format.

## File Structure

- `index.php`: The main PHP file that renders the web page.
- `functions.php`: Contains functions for making a cURL call to fetch data.
- `css/style.css`: The stylesheet for styling the web page.
- `js/custom.js`: Custom JavaScript for additional functionality.

## Dependencies

This project uses the following external libraries and dependencies:

- [Bootstrap 5.3.1](https://getbootstrap.com/docs/5.3/getting-started/introduction/): For styling the web page.
- [Font Awesome](https://fontawesome.com/): For icons.

## Contributing

Feel free to contribute to this project by opening issues or submitting pull requests. Your contributions are welcome!

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.