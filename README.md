# Booking App - Port Elizabeth 🏨

A modern, PHP-powered hotel booking application designed for travelers to compare rates and reserve stays in Port Elizabeth. This project was modernized from a legacy codebase to implement Object-Oriented Programming (OOP) principles, improved UI/UX, and server-side data persistence.

**🌐 Live Demo:** [https://bookingappzintle.up.railway.app](https://bookingappzintle.up.railway.app)

---

## ✨ Features
- **Dynamic Cost Calculation:** Automatically calculates the total cost of stay based on check-in/check-out dates.
- **Modern OOP Architecture:** Uses a robust `Hotel` class with Constructor Property Promotion and Type Safety.
- **Responsive UI:** Built with Bootstrap 5.3, featuring Glassmorphism effects and a mobile-friendly navigation bar.
- **Server-Side Persistence:** Bookings are processed via PHP and saved to a server-side CSV database.
- **Admin View:** Includes a private administrative table to monitor recent bookings.

## 🛠️ Tech Stack
- **Backend:** PHP 8.x (OOP)
- **Frontend:** HTML5, CSS3 (Custom Variables & Glassmorphism), JavaScript
- **Framework:** Bootstrap 5.3
- **Data:** CSV (Flat-file database)
- **Deployment:** Railway.app

---

## 📂 Project Structure

├── classes/
│   └── class.php       # Hotel Class logic
├── css/
│   └── style.css       # Modernized UI styles
├── data/
│   └── bookings.csv    # Server-side data storage
├── pages/
│   ├── admin.php       # Booking management view
│   ├── booking.php     # CSV processing logic
│   ├── confirmBooking.php # User details form
│   ├── hotels.php      # Hotel selection & stay calculation
│   └── success.php     # Final receipt page
├── index.php           # Home page & date selection
└── README.md


🚀 Local Installation

Clone the repository:

Bash
git clone [https://github.com/lilimfobo/bookingApp.git](https://github.com/lilimfobo/bookingApp.git)
Setup XAMPP/WAMP:

Place the project folder in your htdocs directory.

Ensure you are running PHP 8.0 or higher.

Run:

Open your browser and navigate to http://localhost/bookingApp

📝 Deployment Notes

This project is optimized for deployment on Railway.app.

It uses a "Self-Healing" directory logic to create the data/ folder automatically if it doesn't exist on the server.

The PORT variable is configured to 8080 for the PHP buildpack.

👤 Author
GitHub: @lilimfobo