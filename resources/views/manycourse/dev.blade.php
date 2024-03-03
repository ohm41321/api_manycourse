<title>WHO IS DEV</title>
<script>
    function openPopup(url) {
        var width = screen.availWidth;
        var height = screen.availHeight;
        window.open(url, 'Popup', 'width=' + width + ',height=' + height);
    }
</script>

<div style="margin-top: 1.5rem; margin-bottom: -40px; color:#ffa601; display: flex; justify-content: space-between;">
    <a href="/#dev">
        <button class="ui-btn" style="margin-right: -120px;">
            <span style="text-decoration: none;">Back</span>
        </button>
    </a>
    <h1 class="whodev">WHO IS DEV</h1>
</div>
<div class="grid-container">
    <div class="col">
        <img src="https://media.discordapp.net/attachments/1003582679465345034/1162014100553998436/image.png?ex=65f2f6f6&is=65e081f6&hm=7aa8566a59158f22516d8db28a2e521ce8fab50627769aac5e9631803842fa53&=&format=webp&quality=lossless" style="border-radius: 100px;" width="140" height="140">
        <h2 class="fw-normal">Athit Fongkhaimuk</h2>
        <p>6504101409 - Dev.</p>
        <button class="bt-contact" onclick="openPopup('https://poplme.co/G7lP22B1/share')">
            <span>Contact &raquo;</span>
        </button>
    </div>
    <div class="col">
        <img src="https://cdn.discordapp.com/attachments/1003582679465345034/1162012341932662824/365298108_4223788944514137_6778048245465402849_n.jpg?ex=65e9bad3&is=65d745d3&hm=56b9e751faacfcfe0675c26f05be7b45c31e2860b214d64644269e26012e19c9&" style="border-radius: 100px;" width="140" height="140">
        <h2 class="fw-normal">Chaiyut Suntharote</h2>
        <p>6504101318 - Dev.</p>
        <button class="bt-contact" onclick="openPopup('https://poplme.co/GU4bLcu6/dash')">
            <span>Contact &raquo;</span>
        </button>
    </div>
    <div class="col">
        <img src="https://media.discordapp.net/attachments/1003582679465345034/1162012927314886756/image.png?ex=65e9bb5f&is=65d7465f&hm=da4daf63cfd40b0cd30e3946a18f935b241a6ff6ff0f1550faf466dcdbce4e3f&=&format=webp&quality=lossless&width=355&height=437" style="border-radius: 100px;" width="140" height="140">
        <h2 class="fw-normal">Preeyanuch Homseang</h2>
        <p>6504101354</p>
        <button class="bt-contact" onclick="openPopup('https://poplme.co/hash/FxjbYBMb/1/s')">
            <span>Contact &raquo;</span>
        </button>
    </div>
    <div class="col">
        <img src="https://media.discordapp.net/attachments/1003582679465345034/1163347199778885632/373680210_966950998064702_6489262070922683041_n.jpg?ex=65ee9602&is=65dc2102&hm=0275aa3d361cb3def42c310dc744a2b47ed3f6cea39873bff7da4cae8ab067f9&=&format=webp&width=655&height=662" style="border-radius: 100px;" width="140" height="140">
        <h2 class="fw-normal">Sugritta Singharatho</h2>
        <p>6504101405</p>
        <button class="bt-contact" onclick="openPopup('https://poplme.co/hash/IYFbs40Q/1?fbclid=IwAR3y52eevHBReBtalNEhHG-yTRo3-HFz0QW8CT8-8uvm-nKputCbO-LpvYc')">
            <span>Contact &raquo;</span>
        </button>
    </div>
    <div class="col">
        <img src="https://media.discordapp.net/attachments/1003582679465345034/1162012957417422868/image.png?ex=65e9bb66&is=65d74666&hm=8e9f55a2899626d665efcb4d4f7dd830716d93f8347254ea1798ed767d969c25&=&format=webp&quality=lossless&width=611&height=496" style="border-radius: 100px;" width="140" height="140">
        <h2 class="fw-normal">Praphaluck Thitimanokun</h2>
        <p>6504101352</p>
        <button class="bt-contact" onclick="openPopup('https://poplme.co/Geaql6MS/dash')">
            <span>Contact &raquo;</span>
        </button>
    </div>
    <div class="col">
        <img src="https://media.discordapp.net/attachments/1003582679465345034/1213720052621250580/414970688_3209002402738091_3707351578124691677_n.png?ex=65f67fe2&is=65e40ae2&hm=189bacc75c68748215f792d0646ff8e88232102f2864f153b5357f8b37f91207&=&format=webp&quality=lossless&width=661&height=661" style="border-radius: 100px;" width="140" height="140">
        <h2 class="fw-normal">Jittiphat Sanom </h2>
        <p>6504101414</p>
        <button class="bt-contact" onclick="openPopup('')">
            <span>Contact &raquo;</span>
        </button>
    </div>
    <h4 style="text-align: center">Thank for your Support 🙏 </h4>
</div>
<style>
a{
    text-decoration: unset;
}
    img{
      object-fit: cover;
    }
    
    /* grid-card-dev */
    .grid-container{
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 0px;
    
      justify-content: center; /* Center the grid horizontally */
      margin: 0 auto;
      text-align: center;
      padding: 90px;
    }
    .whodev{
      text-align: center;
      font-weight:bold ; 
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
      text-decoration: underline;
      margin: 0 auto;
    }
    .fw-normal{
        margin-top: 20px;
    }
    
    .col{
      text-align: center;
      margin: 20px ; 
      display: flex;
      flex-direction: column; 
      align-items: center; 
      padding: 20px;
    }
    /* grid-responsive-device */
    @media screen and (max-width: 1300px) {
      .grid-container{
      display: grid;
      grid-template-columns: repeat(2, 1fr) ;
      }
    }
    @media screen and (max-width: 900px) {
      .grid-container{
      display: grid;
      grid-template-columns: repeat(1, 1fr) ;
      }
      .fw-normal{
        text-align: center;
        font-size: 1.5rem;
      }
    }
    @media screen and (max-width: 500px) {
      .whodev{
        margin-left: 9rem ;
      }
    }
    
    
    /* Back-Bt */
    .ui-btn {
      --btn-default-bg: rgb(41, 41, 41);
      --btn-padding: 15px 20px;
      --btn-hover-bg: rgb(51, 51, 51);
      --btn-transition: .3s;
      --btn-letter-spacing: .1rem;
      --btn-animation-duration: 1.2s;
      --btn-shadow-color: rgba(0, 0, 0, 0.137);
      --btn-shadow: 0 2px 10px 0 var(--btn-shadow-color);
      --hover-btn-color: #FAC921;
      --default-btn-color: #fff;
      --font-size: 16px;
      margin-left: 40px;
      --font-weight: 600;
      --font-family: Menlo,Roboto Mono,monospace;
      border-radius: 1.25rem;
    }
    
    .ui-btn {
      box-sizing: border-box;
      padding: var(--btn-padding);
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--default-btn-color);
      font: var(--font-weight) var(--font-size) var(--font-family);
      background: var(--btn-default-bg);
      border: none;
      cursor: pointer;
      transition: var(--btn-transition);
      overflow: hidden;
      box-shadow: var(--btn-shadow);
    }
    
    .ui-btn span {
      letter-spacing: var(--btn-letter-spacing);
      transition: var(--btn-transition);
      box-sizing: border-box;
      position: relative;
      background: inherit;
    }
    
    .ui-btn span::before {
      box-sizing: border-box;
      position: absolute;
      content: "";
      background: inherit;
      text-decoration: none;
    }
    
    .ui-btn:hover, .ui-btn:focus {
      background: var(--btn-hover-bg);
    }
    
    .ui-btn:hover span, .ui-btn:focus span {
      color: var(--hover-btn-color);
    }
    
    .ui-btn:hover span::before, .ui-btn:focus span::before {
      animation: chitchat linear both var(--btn-animation-duration);
    }
    @keyframes chitchat {
      0% {
        content: "#ba";
      }
      50% {
        content: "?cc";
      }
      60% {
        content: "kk:%";
        right: 0;
      }
    
      75% {
        content: "";
        right: 0;
      }
    }
    
    /*  */
    
    /* */
    .bt-contact {
     position: relative;
     display: flex;
     justify-content: center;
     align-items: center;
     border-radius: 5px;
     background: #11223a;
     font-family: "Montserrat", sans-serif;
     box-shadow: 0px 6px 24px 0px rgba(0, 0, 0, 0.2);
     overflow: hidden;
     border: none;
     margin: auto;
    }
    
    .bt-contact:after {
     content: " ";
     width: 0%;
     height: 100%;
     background: #ffa601;
     position: absolute;
     transition: all 0.4s ease-in-out;
     right: 0;
    }
    
    .bt-contact:hover::after {
     right: auto;
     left: 0;
     width: 100%;
    }
    
    .bt-contact span {
     text-align: center;
     text-decoration: none;
     width: 100%;
     padding: 7px 15px;
     color: #fff;
     font-size: 1.125em;
     font-weight: 700;
     letter-spacing: 0.3em;
     z-index: 20;
     transition: all 0.3s ease-in-out;
    }
    
    .bt-contact:hover span {
     color: #183153;
     animation: scaleUp 0.3s ease-in-out;
    }
    
    @keyframes scaleUp {
     0% {
      transform: scale(1);
     }
    
     50% {
      transform: scale(0.95);
     }
    
     100% {
      transform: scale(1);
     }
    }
    @media screen and (max-width: 499px) {
      .bt-contact span {
     font-size: 1em;
    }
    }
    </style>