       <?php
       $routes = [
        'getTrackingDetails',
        'metadata'
       ];
       foreach ($routes as $file) {
           require __DIR__ . '/../src/routes/' . $file . '.php';
       }

