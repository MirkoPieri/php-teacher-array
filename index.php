<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="master.css">
    <title>Esercizio2</title>
  </head>
  <body>
    <main>

        <?php

            $db = [
                'teachers' => [
                    [
                        'name' => 'Michele',
                        'lastname' => 'Papagni'
                    ],
                    [
                        'name' => 'Fabio',
                        'lastname' => 'Forghieri'
                    ]
                ],
                'pm' => [
                    [
                        'name' => 'Roberto',
                        'lastname' => 'Marazzini'
                    ],
                    [
                        'name' => 'Federico',
                        'lastname' => 'Pellegrini'
                    ]
                ]
            ];

            foreach ($db as $key => $value) { //Primo for per dividere teachers da pm
              foreach ($value as $persone) { //Secondo for per estrarre nome e cognome
                $name = $persone['name'];
                $lastname = $persone['lastname'];

                if ($key === 'teachers') { //If per inserire insegnanti
                  echo "<div class='gray'>
                          <h2>".$key."</h2>
                          <p>".$name."<p>
                          <p>".$lastname."<p>
                        </div>";
                } else if ($key === 'pm') { //if per inserire pm
                  echo "<div class='green'>
                          <h2>".$key."</h2>
                          <p>".$name."<p>
                          <p>".$lastname."<p>
                        </div>";
                }
              }


            }

        ?>

    </main>
  </body>
</html>

<!-- Utilizzare questo array: https://pastebin.com/CkX3680A
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

REPO: php-teacher-array -->
