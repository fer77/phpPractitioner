<?php require('partials/head.php') ?>

  <h1>All Users</h1>

  <?php foreach ($users as $user) : ?>
      <li><?= $user->name; ?></li>
  <?php endforeach; ?>
<!-- Use helper functions to do simple things like capitalize the first letter of a word that may be comming from an  outside source. -->
   <!-- <h1><?= ucwords('submit your name'); ?></h1> -->

   <!-- This form will submit a GET request to our /names -->
   <form method="POST" action="/users">
     <!-- Action adds a "route" for this information to go somewhere -->
     <!-- If no "name" attribute is included with the <input> then it will not be submitted -->
     <input name="name"></input>
     <button type="submit">Submit</button>
   </form>

<?php require('partials/footer.php') ?>
