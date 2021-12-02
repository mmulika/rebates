 <!-- The overlay -->
 <div id="myNav" class="overlay">

    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
    <!-- Overlay content -->
    <div class="overlay-content">
      <a href="visit" class="{{ request()->is('visit') ? 'active': ''}}">Visit</a>   
       <a href="rebate" class="{{ request()->is('rebates') ? 'active': ''}}">rebates</a>
           <a href="specialist" class="{{ request()->is('specialist') }}">Hosi</a>
      <a href="specialist" class="{{ request()->is('specialist') }}">Specialist</a>
    
    </div>
  
  </div>
  
  <!-- Use any element to open/show the overlay navigation menu -->
  <span onclick="openNav()">open</span> 