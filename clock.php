<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>时钟</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        #clock {
            font-size: 48px;
            font-weight: bold;
        }
        #modeSwitch {
            position: fixed;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="clock"></div>
    <div id="modeSwitch">切换模式</div>
    <script>
        function updateClock() {
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');
            document.getElementById('clock').textContent = `${hours}:${minutes}:${seconds}`;
        }

        function toggleMode() {
            document.body.classList.toggle('dark-mode');
        }

        document.getElementById('modeSwitch').addEventListener('click', toggleMode);

        setInterval(updateClock, 1000);
        updateClock();

        const style = document.createElement('style');
        style.textContent = `
            .dark-mode {
                background-color: #333;
                color: #fff;
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>
