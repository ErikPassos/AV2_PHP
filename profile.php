
<?php 
include_once 'dados.php';
include_once 'postar.php';
//include_once 'valida.php';




?>



<!DOCTYPE html>
<html>
<title>AV2 PHP Unifacs</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="estilo/login.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Logo</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
  
 
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <a href="#" class="w3-bar-item w3-button">One new friend request</a>
      <a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
      <a href="#" class="w3-bar-item w3-button">Jane likes your post</a>
    </div>
  </div>

  <a href="sair.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Sair">Sair</a>

  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
    <img src="data:image/png;base64,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" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
  </a>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
  

</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center"><?php echo $nome; ?></h4>
         <p class="w3-center"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAkFBMVEX///8ALVYAEEn8/f8AK1UAG0wAAEIAKFMAJlIAI1AAIU+lrLcAAEQAHU0AAEEAGEsAE0kACEUAC0bq7O/CydJ8iJrR1duQmqkAGEra3eLKz9bg4+eWn61KXnru8PKzusUbOl8mQWQxSWljcoi8wst6hpmGkaE7UnGcprRbbIVse5FFWXUWN103Tm1od4xTZH7tz5RvAAALxklEQVR4nO2daXuqPBCGK4Q9kICiVVtwr0tP/f//7lW7aglkMmHpe3l/Oh9OiQ+EZGYyMzw83Llz586dO3fu3LnzTjYe5NvRZv22vLBPR0/5ajg12/5dGsgmQXrs2bHBWRj6vue5rut5nu+Hj4wnlL/sn1bTtn+kKtlgdPRsbvku6QlxvJAlxr80/2syzVU6pzws0/YD4vgs9pfBn1E5fnqJuO9Iifsh07NiZz1o+8dXM968xiFU3ZdKnxvLVZfXn/7Ta+zLzUwhHjf2k7aFCFgdohAp70Ok4Txlbav5RTbyuatD3gUS0t2wbUlXTPdUz+P7xosXeduyvhgfbU+vvAsO7wVtS7swPlJ90/Mawtz2n2N/Z9el711jb9WqPjON6pifVxqNRYtrTsD9mvWdceiypb1jvOAN6DvjJ60sOWmkapwpwOaNm+XDXticvhOOPWpWYGpr3uCrafQxTmdW0/pOOFFjb2NAG3wDf2Icm/GslknjM/QT3xnXr68/a2IPFEHqn6kTo6UZ+km8rldgELU2Qz95PNQpcB23re+E/1qfEbdrykwrxw3r2hkPbeyCRZC4FnfDXLS5iF5DohrCcea8bk8QRKTdMTZnnRJ4eoqaJXbsCfbOEvWeACy6JvAk0db5Lh7wiwzxLR5TmiSUxvwRfHBThK3PSN1htwnHsnv7YNK/uAZmf5inc/qIjtERo69JYMpwv8S3F8Gv35LlzxQ7M5yeHm8qiFA/w4v2gtnU3xjIswDvnw6BE5RAx96XWJHmKMYtYeESL7BvYH4BW1SYkNkRZ8wbT2iFM8SCQCKJ8fMEteSg7bclImjohlLLeTbHrDiE43ypIFEf25vLjv2M2Y1c1GozRYRFvYX8OEvMfsQ2CIUzddPDm0MGQtkUkbq3mKqPC92MXxC7BnFUBQ5t9VEpMNBgEsTe778pKuypDxqDT6fHiNvZo2qeFGKO+gqmxgix2hBXRSDmpnIVixixrPVClTjxQn1AphR6RxnACr5ioB4bJa8qAk8bP8J8cwC77zsmU19mmGISDGbt7hnQQVOEPcrUBD48/EO8icSHjdWn6mP5ylZUjjHeLNhB/xJhYsTKpwom4r72egnEycDsFKrrzJkdxuP3U8BIR8Sqpj5JT9P0EaGwZ8s/RJQFxRCx6CkqpOHLb/uoyUIxPjcuMCs99BTzCKGr9jXPqFi49AuyxsRN3BeMwhQXJJa0hzOKCdN6qr7ahS0uW87aSo3yhHoZMEvpyRrGvYikJzWKh4q0h6gcQtx2cbJOZRbyFS7hAqkQeQjkHiUGwez2eIXIZ9izqw/cMsxW0Wv5PTzd4OpzhC1yDNxa+oTNPJawiufI82cHtR+ituILSVV4GGXPnGnTpjlT+ZaM0AnqLdqlZ0hYMcQMnV3JEak8ON/inYppOkV52Rfa8w+lxseupD2kj6+hSozMSofAhCw/iZUTeXBxmk9o2aavZQhErE3DJD05GGUR94GWJOBW4qXfeLuSITZakmQfFSsGhpqyyMvuMOI05geSXtovdCwCZxLxQmBiDZoPmJyrfQMu+eoHJS/iRFcufuPnh1eUGP8adsOPMcpedgGYM+BrSt4SzGnFNQ2f498gNo0x+RA3QI9nTEdjuREX5brpMSnecUhz+TS/EAYVhzqLflxYTpTWqmLhAYYeo+lrGMDJOjqR/BpHlMynx6L5wps1kptYhMiq0eG7/MSxpFLqaqhKFS2m2CDUL4hMEX2e6K9KNQS3tobqQjavcBazIyJHVzxscSQl07hZfOFEpbn6m3p62wgs02kdd/O0ptKyeotahhQ54drs7lu8eL79ZeJkwcGurWRTYHuvtJm+v3Cs2NkHk+ln3VOwfqVWjWXvgiMo9KlIKcSzeGJzxngccwvbt64CQR6fNt+pBNJDJB5DhilUiDZpiOP71i1Va8nNX4SlzUClKT48weVBnLs6vqw32+CGbfnbHabX/32UHl2bYR0NwgsVYk62SEhF/RwPZStKYSFBP19ShluHkkLfba9+51x7I3QH87JNSJQvbeZzlDEXa1bIDmWB9JIqyrKjsAmmlRgtVKiczUbLw/glR5KPpWHH3FC+58UK3xSvZ1eEuDNhHJRY5X9pPqsaIcUKFWcprYzhC29d+SM8s1H0BuxChWprqURt3FjwM2WO/AO1IGPxWqq0H3rP1b9SdCAhVXiiJFGwH6rYNMSSCRoWHypJHhZvVN7F4hdcJVtHso7jpeghGpIpDYV/XI6gIlHBt5BND5oUPETpOp4+PN+VFAdrFfICqeyR/ctvA4VK17bCc3yc4n5gcB/flVlmLgx/LaeA4ykT/MO84vrHMbh7QiJf7X+b00kgqVPgNVBQXJJBj9GdmfyPvM2Xe4SkoYJTpUQ5mNDrSOaNv3NtTwCP+qGBAVF94CvwOhL5uN9cv0wU1s0CaoyIDhCB+c/Ass2fRanQSmjoMh8L7j3wTvnAjO7vVBY5S+gH0EUwFlwHuOVzYAnX92JjQxM0gYugYMMHb4iiqSDkM9sCXq1vwg4cBNvhyTyC3aliD6WMxeVFJy74D03YLBVXRMCuY4B/6PsttOGtSIAKxWnKsMQyuMKH1cl44wolJ0CF4vcHZh0pKHxImS9ty6orNIQXgp0+qSh8OCg1kYMpLCl+glUEKSk0lRoBwhSWVQaB7D8lhWrAFAqTvk7sIS9iZxUWh/TfAdl/XVVYWokMaofRVYXlBXqQpKGuKiwvC4LsiF1VWH4YMgRcqqMKvX35tQBLTUcVVtXOAfaLjiqkFdcC1AV1U6HQN/xCvrNvNxVWF3jKB2s6qrDyYmNpR7+TCmW68EgX53RSocyXL6Qjbl1U6MjUQEgXsHVRYWn96BeyW2IHFZLiLJNbRKkTf0ChbMu20ly7TiuU7e07kLte9xS60ufKcl5i9xTKpwbINVLqnEIX8L0yqV2/cwrlH+HpIcpcsWsKIY9Q7k3smkLp5J4LEwnDpmMKofXjEsdQZYFXzcickILyJk5MqxscgM+A1elXKwwhHWgvVOfTPjb3ZffqtEkCb6hiWlXhDKLpa0vVDKq9cnA774dzpnzVVR1r1MDHa83BrlqgWpe4Q/ViEybGbrQa1/Qss2E+Wr7aTOLs3VbqsN2X+siMGzLDDhe7TbAa9vVI7Q9XwWY3tyKDhXKtRpliO8qtfOzU8XyL8YTy2csyHQX5ZDjNIHLNbDoc5NvRfjf3aGwwy3cBZ0RSsYtCVDKsXc8PT2KNxKZnvYfdfp2OttsgyFer1eCD0z9XQbDdjtL1/nhY+JRGicFZ6HuuSgcQtTl6JsPWPhPHcb2T5NCyLMYYZ/wTxiwrDEP/pElJ1E844stkeRe+cFwFzOK+5a2mcnKNEIb7LJm25k21gf0cKeZDF42gkkR2zUpXj7F68GWaP1ew6cbnxotxEI02v9Hb4UgrhOvx4Dr4ueMPFFJVCzFJRxdUW5uH2udNtHoAEyu1ZyxmGndQooHq/n4L6nNa9cBVPiZXJhH1WY8aYBWpT39eItcu8DxROyTR0DxF3xnzzmwasdZF5pu+W0vrMTi2xm3imkx//z8FSFRnKFq5FYc+HFHLQE2s294Y/de6j0uCdpdUrsEfrGLstedqkAjt0ctgPrflE3sMGZORZmu3sjPyAy6qBmH62kB/vhucqLZdsJC06cfI5sqhe0WGjT5G10ZE7pUZRU0ZccR4aS5n4Cf9QzOufxg2lzFwy6pXvxXnVTS8q5str/d1dO1lOxP0G3OU1BcxdumxgVyISsyRUZmZooRHn+t1I+Qxnyxkv9EC/GjZhef3RT6PdRrkDjM2bb9/vxi+aWtg7UeLoLm0QABZMKfypW8iPM7TTk3Pa6ajWRyqP0nic/6G+DZ7M0yfFpSpfDXZtRJ33Xl572T53rOZL/8siWsZ9Hnb4clZQD9fz6nxWNmA3PEsTp3dtis7HwxzmKfPrm3wc6v1q9Qn4rjnTDgjYov9dtCc614P5nQQjNa7w9yLbXrGptbry3F/zmb869qKMDu50d25c+fOnTv/c/4DGlDmzFTEeCQAAAAASUVORK5CYII=" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme">Nick:<?php echo $usuario; ?></i></p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i>Cidade: Salvador, BA</p>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme">Email:<?php echo $email; ?></i></p>
        
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Some text..</p>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
          <div id="Demo3" class="w3-hide w3-container">
         <div class="w3-row-padding">
         <br>
           <div class="w3-half">
             <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/snow.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
         </div>
          </div>
        </div>      
      </div>
      <br>
      
      <!-- Interests --> 
      <div class="w3-card w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Interests</p>
          <p>
            <span class="w3-tag w3-small w3-theme-d5">News</span>
            <span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
            <span class="w3-tag w3-small w3-theme-d3">Labels</span>
            <span class="w3-tag w3-small w3-theme-d2">Games</span>
            <span class="w3-tag w3-small w3-theme-d1">Friends</span>
            <span class="w3-tag w3-small w3-theme">Games</span>
            <span class="w3-tag w3-small w3-theme-l1">Friends</span>
            <span class="w3-tag w3-small w3-theme-l2">Food</span>
            <span class="w3-tag w3-small w3-theme-l3">Design</span>
            <span class="w3-tag w3-small w3-theme-l4">Art</span>
            <span class="w3-tag w3-small w3-theme-l5">Photos</span>
          </p>
        </div>
      </div>
      <br>
      
      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Hey!</strong></p>
        <p>People are looking at your profile. Find out who.</p>
      </div>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    
    <form method="POST" enctype="multipart/form-data">
  
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">Pense em algo:</h6>
              
             
              <label for="file-input">
                <img src="" title="inserir uma foto">
              </label>
            
              
              <p><input class="w3-input w3-border w3-hover-blue" type="text" name="post"></p>
              <input type="submit" class="w3-button w3-green" value="Publicar"/>
              <input type="file" id="file-input" name="file" hidden />
               <!-- file 
              <input type="file" id="file-input" name="file" hidden/>
              -->
              
            </div>
            
          </div>
        
        </div>
       
      </div>
      <br>
      <br>
      <?php include_once 'feed.php';  ?>
      
      
    <!-- End Middle Column -->
    </div>

    </form>

   
   
    
    <!-- Right Column -->
    <div class="w3-col m2">
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Upcoming Events:</p>
          <img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">
          <p><strong>Holiday</strong></p>
          <p>Friday 15:00</p>
          <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
        </div>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Friend Request</p>
          <img src="data:image/png;base64,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" alt="Avatar" style="width:50%"><br>
          <span>Jane Doe</span>
          <div class="w3-row w3-opacity">
            <div class="w3-half">
              <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
            </div>
            <div class="w3-half">
              <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
            </div>
          </div>
        </div>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <p>ADS</p>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-padding-32 w3-center">
        <p><i class="fa fa-bug w3-xxlarge"></i></p>
      </div>
      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>

  <!-- feed -->
 
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
  <h5>Footer</h5>
</footer>

<footer class="w3-container w3-theme-d5">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>
 
<script>
// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html> 
