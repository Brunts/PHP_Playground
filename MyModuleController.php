<?php

namespace Drupal\phpfun\Controller;

use Drupal\Core\Controller\ControllerBase;

class MyModuleController extends ControllerBase {
  public function customPage() {
    // HTML and JavaScript for the counter and button
    $js = [
      '#type' => 'inline_template',
      '#template' => '
        <h1>Hello, world! THIS IS SUCCESS!!!!!!!!!!!!!!!!!!!!!!!!!!!!</h1>
        <button id="incrementButton">Click me to update the counter in local storage</button>
        <p>Counter: <span id="counter">0</span></p>
         <!-- Link to GitHub repository -->
        <p>
          <a href="https://github.com/Brunts/DatabaseProject" target="_blank">Visit my GitHub repo</a>
        </p>
        <script>
          (function() {
            // Get the stored counter from localStorage or default to 0 
            let count = localStorage.getItem("counter") ? parseInt(localStorage.getItem("counter")) : 0;
            const button = document.getElementById("incrementButton");
            const counter = document.getElementById("counter");

            // Display the initial counter value
            counter.textContent = count;

            // Increment the counter and update the display when button is clicked
            button.addEventListener("click", function() {
              count++;
              counter.textContent = count;

              // Save the updated counter to localStorage
              localStorage.setItem("counter", count);
            });
          })();
        </script>
      ',
      '#attached' => [
        'library' => [],
      ],
    ];
    
    return $js;
  }
}
