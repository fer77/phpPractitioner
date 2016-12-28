<?php require('partials/head.php') ?>

<!-- For any piece of reusable code like this, we include it in a 'partials' folder.
          <nav>
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="/about">About</a></li>
              <li><a href="/contact">Contact</a></li>
              <li><a href="about/culture">About our Culture</a></li>
            </ul>
          </nav>
          <?php require('partials/nav.php') ?> moved to partials/head.php -->

          <header>
             <h1>
               <?=
                // <?php echo is equivelent to <?=
                "$greeting"
                ?>
            </h1>
<!-- PHPs closing tag ?> is necessary only when separating PHP code from other code, like in this example. -->
          </header>

<!-- Loop through each array value -->
    <!-- <ul>
        <?php foreach ($belchers as $member) : ?>

        <li><?= $member; ?></li>

        <?php endforeach; ?>
    </ul> -->

<!-- Loop through each $key and $value -->
    <!-- <ul>
        <?php foreach ($belcher as $key => $self) : ?>

        <li><strong><?= $key; ?></strong> <?= $self; ?></li>

        <?php endforeach; ?>
    </ul> -->

<!-- Use helper functions to do simple things like capitalize the first letter of a word that may be comming from an  outside source. -->
     <h1><?= ucwords('submit your name'); ?></h1>

     <!-- This form will submit a GET request to our /names -->
     <form method="POST" action="/names">
       <!-- Action adds a "route" for this information to go somewhere -->
       <!-- If no "name" attribute is included with the <input> then it will not be submitted -->
       <input name="name"></input>
       <button type="submit">Submit</button>
     </form>

<?php require('partials/footer.php') ?>
