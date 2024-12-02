<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }

        .main {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 350px;
        }

        .main h2 {
            color: #4caf50;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        select,
        textarea {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button[type="submit"] {
            padding: 15px;
            border-radius: 10px;
            border: none;
            background-color: #4caf50;
            color: white;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        .output {
            margin-top: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .output h3 {
            color: green;
        }

        .output p {
            color: #555;
        }
    </style>
</head>

<body>
    <div class="main">
        <h2>Registration Form</h2>
        <form id="registrationForm">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required />

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required />

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" placeholder="Enter your phone number" maxlength="10" pattern="[0-9]{10}" 
                title="Please enter a valid 10-digit phone number" required />

            <label for="address">Address:</label>
            <textarea id="address" name="address" placeholder="Enter your address" rows="3" required></textarea>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>

            <button type="submit">Submit</button>
        </form>

        <div class="output" id="output" style="display: none;">
            <h3>Registration Successful!</h3>
            <p id="outputDetails"></p>
        </div>
    </div>

    <script>
        document.getElementById('registrationForm').addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent the page from reloading

            // Get form values
            const fullName = document.getElementById('fullname').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const address = document.getElementById('address').value;
            const gender = document.getElementById('gender').value;

            // Display output
            const outputDiv = document.getElementById('output');
            const outputDetails = document.getElementById('outputDetails');
            outputDetails.innerHTML = `
                <strong>Full Name:</strong> ${fullName}<br>
                <strong>Email:</strong> ${email}<br>
                <strong>Phone Number:</strong> ${phone}<br>
                <strong>Address:</strong> ${address}<br>
                <strong>Gender:</strong> ${gender}
            `;
            outputDiv.style.display = 'block';
        });
    </script>
</body>

</html>
