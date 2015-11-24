# PHP Background Worker Demo Application for Heroku

An application showing how to handle background jobs using worker dynos in PHP on Heroku.
1) www/index.php to serve a front-end using Silex that allows submission of new text and displays existing submissions.
2) bin/worker.php to process jobs.
3) Heroku Scheduler for running jobs.

For a full explanation of the individual components and more background information, please check out the [PHP Workers](https://devcenter.heroku.com/articles/php-workers) article on Heroku Dev Center.

To deploy this application to Heroku right now, you can use this button:
[![Deploy](https://www.herokucdn.com/deploy/button.png)](https://heroku.com/deploy?template=https://github.com/technomile/Heroku-PHP-Worker-Demo)