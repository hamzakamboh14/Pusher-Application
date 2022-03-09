<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pusher Test</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
        <script>
      
          // Enable pusher logging - don't include this in production
          Pusher.logToConsole = true;
      
          var pusher = new Pusher('b085c7bff7e0a71f84e5', {
            cluster: 'ap2'
          });
      
          var channel = pusher.subscribe('my-channel');
          channel.bind('my-event', function(data) {
            alert(JSON.stringify(data));
          });
        </script>
      </head>
      <body>
        <h1>Pusher Test</h1>
        <p>
          Try publishing an event to channel <code>my-channel</code>
          with event name <code>my-event</code>.
        </p>
      </body>
</html>