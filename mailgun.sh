#!/bin/bash
curl -s --user 'api:cff823e776d576fd37028895b45d8d68-fd0269a6-a8b73a6c' \
    https://api.mailgun.net/v3/sandboxf866b496097e4d1d969c61a8d965cd4a.mailgun.org/messages \
    -F from='Excited User <mailgun@sandboxf866b496097e4d1d969c61a8d965cd4a.mailgun.org>' \
    -F to=lraby11@gmail.com \
    -F subject='Hello' \
    -F text='Testing some Mailgun awesomness!'
