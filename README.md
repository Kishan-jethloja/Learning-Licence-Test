# 💻Learning License Test System

A web-based Learning License Test System built with **PHP** and **MySQL** that enables RTO (Regional Transport Office) to efficiently conduct and manage learners license tests for candidates.

## 📋Description

This system simplifies the learning license test process by providing a secure platform for candidates to take their tests and for administrators to manage test results. The system maintains candidate data securely and allows for structured test responses, making it ideal for RTOs to conduct efficient license tests.

## 🌟Key Features

- Candidate registration and authentication system
- Secure storage of candidate information
- Structured test response system
- Real-time test evaluation
- User-friendly interface for both administrators and candidates
- Comprehensive test result tracking

## 🛠Technologies Used

- PHP
- MySQL
- HTML
- CSS
- JavaScript

## 🚀Installation

1. Clone this repository to your local machine
2. Set up a local web server (e.g., **XAMPP**)
3. Import the MySQL database using the provided `tables.sql`
4. Configure the database connection in your configuration file
5. Access the application via your web browser (e.g., `http://localhost/your-folder-name/`)

## 🔧Database Configuration

The system uses the following database tables:

1. **users**
   - Stores candidate information including name, email, and contact details
   - Secure password storage
   - Unique email and Aadhar number validation
   - Gender information for demographic tracking

2. **responses**
   - Records candidate responses to test questions
   - Tracks response timestamps
   - Links responses to candidate emails
   - Stores test results

3. **feedback**
   - Stores candidate feedback about the test experience
   - Includes sender name and email
   - Timestamps for each feedback entry

## 💡Usage

- **Candidate Registration**
  - Register with personal details
  - Secure password creation


- **Test Taking**
  - Access test questions
  - Submit answers
  - View immediate results
  - Track test history

- **Administrator Features**
  - Manage candidate records
  - View test results
  - Generate reports
  - Handle candidate feedback

## 📁Project Structure

| File                | Description                                |
|---------------------|--------------------------------------------|
| `tables.sql`        | Database schema and table definitions      |
| `index.php`         | Main entry point and login interface       |
| `config.php`        | Configuration and database settings        |
| `test_interface.php`| Test taking interface for candidates       |
| `admin_dashboard.php`| Administrative interface for managing tests|
| `results.php`       | Test results display interface             |

## ✅Takeaway

This Learning License Test System provides a robust solution for RTOs to conduct and manage learners license tests effectively. It combines security, ease of use, and comprehensive test management in a single platform.

Perfect for RTOs looking to digitize their learning license test process and maintain accurate records!

Thank you for checking out this project! 😊 
