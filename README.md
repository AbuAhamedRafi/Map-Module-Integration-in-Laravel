# Map Module Project

This project is a web application built using Laravel, Tailwind CSS, and Google Charts. It allows users to view, add, and manage country data, which is visualized using a Google GeoChart.

## Features

- **Home Page**: Displays a welcome message and a GeoChart showing country popularity data.
- **Add Country Page**: A form to add new countries with their popularity data to the database.
- **Responsive Design**: The UI is styled using Tailwind CSS, ensuring a responsive and modern design.

## Technologies Used

- **Laravel**: A PHP framework used for building the backend.
- **Tailwind CSS**: A utility-first CSS framework used for designing the UI.
- **Google Charts**: A visualization tool used to create a GeoChart displaying country data.

## Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/AbuAhamedRafi/Map-Module-Integration-in-Laravel.git
   ```

2. **Navigate to the project directory**:
   ```bash
   cd name of your repository
   ```

3. **Install dependencies**:
   ```bash
   composer install
   npm install
   ```

4. **Set up environment variables**:
   Copy the `.env.example` file to `.env` and update the necessary environment variables (like database credentials).

5. **Run migrations**:
   ```bash
   php artisan migrate
   ```

6. **Run the development server**:
   ```bash
   php artisan serve
   ```

7. **Visit the application**:
   Open your browser and navigate to the provided link.

## Usage

- **Home Page**: The home page displays a map showing country popularity. You can navigate to the "Add Country" page to insert new data.
  
- **Add Country**: Use the form on this page to add new countries and their popularity data. The data will be immediately reflected on the home page's map.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contact

For any inquiries or collaboration requests, please reach out to [abuahamedrafi@google.com](mailto:abuahamedrafi@gmail.com).
