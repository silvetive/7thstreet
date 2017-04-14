<?php

    curl -F 'client_id=d06ab8e2dc014b1e8f8d0a54e9d93358' \
    -F 'client_secret=1fc0bde4cc3c44d689d1d4ffd3b68907' \
    -F 'grant_type=authorization_code' \
    -F 'redirect_uri=http://www.treetopadventurepark.com' \
    -F 'code=CODE' \
    https://api.instagram.com/oauth/access_token

?>