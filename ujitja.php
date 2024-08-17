<?php include_once('header.php');?>

    <div class="main">
        <div class="left-column">
            <h2>Welcome to the Garden</h2>
            <p>Learn about watering and take a look at some beautiful photos of our garden.</p>

            <table class="instructions">
                <thead>
                    <tr>
                        <th>Step</th>
                        <th>Instruction</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Water the plants regularly.</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Place the pots in a sunny spot.</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Prune dead leaves for a healthier garden.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        
        <div class="right-column">
            <label class="toggle">
                <span class="onoff">E Ndalur</span>
                <input type="checkbox" />
                <span class="slider round"></span>
            </label>
            
    </div>

   

    <style>
        body {
            background-image: url('img/main.jpg');
            margin: 0;
        }

        .main {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-evenly;
            height: 100vh;
        }

        .left-column,
        .right-column {
            flex: 1;
        }

        h2, p {
            color: white;
            max-width: 600px;
            text-align: center;
            margin-bottom: 20px;
        }

        .toggle {
            position: relative;
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .toggle input {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }

        .toggle .onoff {
            color: white;
            font-size: 5em;
            text-align: center;
        }

        .slider {
            position: relative;
            display: block;
            cursor: pointer;
            background-color: black;
            transition: 0.5s;
            width: 200px;
            height: 120px;
            margin-top: 10px; /* Adjusted margin */
        }

        .slider:before {
            content: "";
            position: absolute;
            height: 100px;
            width: 100px;
            background-color: white;
            transition: 0.5s;
            top: 10px;
            left: 10px;
        }

        input:checked + .slider {
            background-color: green;
            box-shadow: 0 0 12px green;
        }

        input:checked + .slider:before {
            transform: translateX(80px);
        }

        .slider.round {
            border-radius: 20px;
        }

        .slider.round::before {
            border-radius: 20px;
        }

        .instructions {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
            color: black;
            margin-left: 3%;
        }

        .instructions th, .instructions td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }

        .instructions th {
            background-color: #f2f2f2;
        }

        /* Adjusted styles for the Back button */
        .right-column a {
            margin-top: 20px;
        }

        /* Added styles for the photos */
        .photo-container {
            display: flex;
            justify-content: space-evenly;
            margin-top: 10px; /* Margin below the table */
        }

        .photo-container img {
            max-width: 100%;
            height: auto;
        }
    </style>

    <script>
        const toggle = document.querySelector('.toggle input')

        toggle.addEventListener('click', () => {
            const onOff = toggle.parentNode.querySelector('.onoff')

            onOff.textContent = toggle.checked ? 'E Ndezur' : 'E Ndalur'
        })
    </script>
</body>
</html>



 
 