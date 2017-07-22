// Configure loading modules from the lib directory,
// except for 'app' ones, which are in a sibling directory.

// The Google CDN requests were hanging up / timing up A LOT,
// put in the URLs for jQuery hosted CDN

requirejs.config({
  baseUrl: '/assets/js/libs',
  paths: {
    app:    '/assets/js/app', 
    jquery: [
              'jquery-1.12.3.min',
              '//code.jquery.com/jquery-1.12.3.min',
              '//ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min'
            ]
  }
});
