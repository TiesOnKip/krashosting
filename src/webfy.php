<!DOCTYPE html>
<html>
<head>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Anek+Bangla:wght@100..800&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Lilita+One&display=swap");

    @font-face {
        font-family: Nimbus;
        src: url("../fonts/NimbusSansT-BlackCondensed.otf");
    }

    :root {
        --purple: #653398;
        --blue: #60b4d4;
        --green: #5bca54;
        --red: #f34f3a;
        --white: #f9f7f7;
        --black: #191a1c;
        --anek: "Anek Bangla", sans-serif;
        --nimbus: Nimbus;
        --tt: "TT backwards sans trial";
        --lilita: "Lilita One", sans-serif;
    }

    body {
      font-family: var(--lilita);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-color: #f5f5f5;
    }
    
    .card-container {
      position: relative;
      width: 300px;
      height: 600px;
      background-color: #9C65D5;
      border-radius: 40px;
      display: flex;
      justify-content: center;
      padding: 30px;
    }
    
    .card-inner {
      background-color: white;
      border-radius: 30px;
      width: 90%;
      height: 80%;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
      position: relative;
    }
    
    .header {
      background-color: #9C65D5;
      color: white;
      border-radius: 25px;
      padding: 10px 30px;
      text-align: center;
      margin-top: 10px;
      width: 60%;
    }
    
    .header h2 {
      margin: 0;
      font-size: 24px;
   
    }
    
    .header p {
      margin: 0;
      font-size: 12px;
    }
    
    .features {
      margin-top: 20px;
      width: 100%;
    }
    
    .feature {
      display: flex;
      align-items: flex-start;
      margin-bottom: 15px;
    }
    
    .check {
      color: green;
      border-radius: 50%;
      width: 24px;
      height: 24px;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-right: 10px;
      
      flex-shrink: 0;
    }
    
    .cross {
     
      color: red;
      border-radius: 50%;
      width: 24px;
      height: 24px;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-right: 10px;
      flex-shrink: 0;
    }
    
    .feature-text {
      text-align: center;
      flex-grow: 1;
    }
    
    .buy-button {
      background-color: #9C65D5;
      color: white;
      border: none;
      border-radius: 25px;
      padding: 10px 30px;
      font-weight: bold;
      font-size: 18px;
      cursor: pointer;
      margin-top: 20px;
    }
    
    .price-circle {
      position: absolute;
      bottom: -80px;
      background-color: black;
      color: #9C65D5;
      width: 160px;
      height: 160px;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 70px;
      font-weight: bold;
      border: 10px solid white;
    }
    .price-outline {
      position: absolute;
      bottom: -100px;
      background-color: #9C65D5;
      width: 210px;
      height: 210px;
      border-radius: 50%;
    }
  </style>
</head>
<body>
  <div class="card-container">
    <div class="card-inner">
      <div class="header">
        <h2>BEGINNER</h2>
        <p>PER MAAND</p>
      </div>
      
      <div class="features">
        <div class="feature">
            <img src="./img/kruisje.png" alt="">
          <div class="feature-text">
            Lorem ipsum dolor sit<br>amet
          </div>
        </div>
        
        <div class="feature">
        <img src="./img/kruisje.png" alt="">
        <div class="feature-text">
            Lorem ipsum dolor sit<br>amet
          </div>
        </div>
        
        <div class="feature">
        <img src="./img/vinkje.png" alt="">
        <div class="feature-text">
            Lorem ipsum dolor sit<br>amet
          </div>
        </div>
        
        <div class="feature">
        <img src="./img/kruisje.png" alt="">
        <div class="feature-text">
            Lorem ipsum dolor sit<br>amet
          </div>
        </div>
      </div>
      
      <button class="buy-button">KOOP NU</button>
      
      <div class="price-outline"></div>
      <div class="price-circle">€5</div>
    </div>
  </div>
</body>
</html>