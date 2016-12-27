<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Document</title>
    <style media="screen">
      header {
        background: #e3e3e3;
        padding: 2em;
        text-align: center;
      }
        </style>
    </head>
        <body>

          <nav>
            <ul>
              <li><a href="/about.php">About Page</a></li>
              <li><a href="/contact.php">Contact Page</a></li>
            </ul>
          </nav>

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
    <h1><?= ucwords('tasks for the day'); ?></h1>

      <ul>
          <li>
              <strong>Name: </strong> <?= $tasks['title']; ?>
          </li>
          <li>
              <strong>Due Date: </strong> <?= $tasks['due']; ?>
          </li>
          <li>
              <strong>Who's Doing This: </strong> <?= $tasks['assigned']; ?>
          </li>
          <li>
          <!-- true ? 'do something' : 'do something else' -->
              <strong>Done: </strong><?= $tasks['completed'] ? 'Complete' : 'Incomplete'; ?>
          <!-- Ternary vs conditional. It all depends on the amount of mark up or code to be written -->
           </li>
           <li><strong>Recuring: </strong>
          <!-- Conditionals can also be written in php -->
          <?php if ($tasks['recuring']) : ?>
              Yes.
          <?php else : ?>
              Luckly no.
          <?php endif; ?>
           </li>
      </ul>

      <ul>
      <?php foreach ($tasks as $task) : ?>
          <li>
              <?php if ($task->completed) : ?>
                  <strike><?= $task->description; ?></strike>
              <?php else: ?>
              <?= $task->description; ?>
              <?php endif; ?>
          </li>
       <?php endforeach; ?>
      </ul>

  </body>
</html>