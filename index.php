<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Team Shuffle</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(120deg, #84fab0, #8fd3f4);
            background-size: 400% 400%;
            animation: gradientBackground 10s ease infinite;
            color: #333;
        }
        header {
            text-align: center;
            background-color: rgba(0, 123, 255, 0.8);
            color: white;
            padding: 15px 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        textarea, input, button {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        textarea:focus, input:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
            transition: box-shadow 0.3s, border-color 0.3s;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            transition: transform 0.2s, background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
        .team {
            margin-top: 20px;
            padding: 15px;
            background-color: rgba(241, 241, 241, 0.9);
            border-radius: 6px;
            opacity: 0;
            animation: fadeIn 1s forwards;
        }
        .team h3 {
            margin-top: 0;
        }
        ul {
            padding-left: 20px;
        }
        @media (max-width: 600px) {
            header {
                font-size: 20px;
                padding: 10px;
            }
            textarea, input, button {
                font-size: 14px;
                padding: 8px;
            }
            .team {
                padding: 10px;
            }
        }
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes gradientBackground {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }


        .area{
    background: #4e54c8;  
    background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);  
    width: 100%;
    height:100vh;
    
   
}

.circles{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: -1;
}

.circles li{
    position: absolute;
    display: block;
    list-style: none;
    width: 20px;
    height: 20px;
    background: rgba(255, 255, 255, 0.2);
    animation: animate 25s linear infinite;
    bottom: -150px;
    
}

.circles li:nth-child(1){
    left: 25%;
    width: 80px;
    height: 80px;
    animation-delay: 0s;
}


.circles li:nth-child(2){
    left: 10%;
    width: 20px;
    height: 20px;
    animation-delay: 2s;
    animation-duration: 12s;
}

.circles li:nth-child(3){
    left: 70%;
    width: 20px;
    height: 20px;
    animation-delay: 4s;
}

.circles li:nth-child(4){
    left: 40%;
    width: 60px;
    height: 60px;
    animation-delay: 0s;
    animation-duration: 18s;
}

.circles li:nth-child(5){
    left: 65%;
    width: 20px;
    height: 20px;
    animation-delay: 0s;
}

.circles li:nth-child(6){
    left: 75%;
    width: 110px;
    height: 110px;
    animation-delay: 3s;
}

.circles li:nth-child(7){
    left: 35%;
    width: 150px;
    height: 150px;
    animation-delay: 7s;
}

.circles li:nth-child(8){
    left: 50%;
    width: 25px;
    height: 25px;
    animation-delay: 15s;
    animation-duration: 45s;
}

.circles li:nth-child(9){
    left: 20%;
    width: 15px;
    height: 15px;
    animation-delay: 2s;
    animation-duration: 35s;
}

.circles li:nth-child(10){
    left: 85%;
    width: 150px;
    height: 150px;
    animation-delay: 0s;
    animation-duration: 11s;
}



@keyframes animate {

    0%{
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
    }

    100%{
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
    }

}
    </style>
</head>
<body>

	<ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    <header>
        <h1>Cricket Team Shuffle</h1>
    </header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<main class="" style="width: 35%;">
    <form id="shuffleForm" class="row g-3">
        <!-- Player Names Input -->
        <div class="col-12">
            <label for="players" class="form-label">Enter Player Names (one per line):</label>
            <textarea 
                name="players" 
                id="players" 
                class="form-control" 
                rows="10" 
                placeholder="Enter player names here..."
            ></textarea>
        </div>

        <!-- Number of Teams Input -->
        <div class="col-md-6">
            <label for="num_teams" class="form-label">Number of Teams:</label>
            <input 
                type="number" 
                name="num_teams" 
                id="num_teams" 
                class="form-control" 
                required
            >
        </div>

        <!-- Submit Button -->
        <div class="col-12">
            <button type="button" id="divide_btn" class="btn btn-primary w-100">
                Divide Teams
            </button>
        </div>
    </form>

    <!-- Teams Container -->
    <div id="teamsContainer" class="mt-4"></div>
</main>


    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

    <script>
        const divideBtn = document.getElementById('divide_btn');
        const playersInput = document.getElementById('players');
        const numTeamsInput = document.getElementById('num_teams');
        const teamsContainer = document.getElementById('teamsContainer');

        function shuffle(array) {
            for (let i = array.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [array[i], array[j]] = [array[j], array[i]];
            }
            return array;
        }

        divideBtn.addEventListener('click', () => {
            const players = playersInput.value.trim().split(/\n/).filter(player => player.trim() !== '');
            const numTeams = parseInt(numTeamsInput.value);

            if (players.length === 0 || isNaN(numTeams) || numTeams <= 0) {
                alert('Please enter valid player names and number of teams.');
                return;
            }

            const shuffledPlayers = shuffle(players);
            const teams = Array.from({ length: numTeams }, () => []);

            shuffledPlayers.forEach((player, index) => {
                teams[index % numTeams].push(player);
            });

            // Display teams
            teamsContainer.innerHTML = '<h2>Teams</h2>';
            teams.forEach((team, index) => {
                const teamDiv = document.createElement('div');
                teamDiv.classList.add('team');
                teamDiv.innerHTML = `
                    <h3>Team ${index + 1}</h3>
                    <ul>
                        ${team.map(player => `<li>${player}</li>`).join('')}
                    </ul>
                `;
                teamsContainer.appendChild(teamDiv);
            });
        });

        const divide_btn = document.getElementById('divide_btn');

        divide_btn.addEventListener('click', () => {
    // trigger confetti
        	confetti({
        		particleCount: 100,
        		spread: 70,
        		origin: { y: 0.6 }
        	});

    // button animation
        	divide_btn.style.transform = 'scale(0.95)';
        	setTimeout(() => {
        		divide_btn.style.transform = 'scale(1)';
        	}, 100);
        });

    </script>
</body>
</html>
