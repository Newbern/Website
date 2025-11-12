<div class="main-block">

  <!-- Back button -->
  <button class="btn" onClick="change('Back')">&#8592;</button>

  <!-- Phone Layout-->
  <div class="Phone">
    <?php 
      $comp = json_decode($companys);
      foreach ($comp as $index => $company) {
          if (!empty($company->name)) {
            echo '<a id="'.$index.'" class="pages off" href="'.$company->url.'"><img src="'.$company->image.'" alt="'.$company->name.'"></a>';
          }
      }
    ?>
  </div>

  <!--Next Button-->
  <button class="btn" onClick="change('Next')">&#8594;</button>
</div>
