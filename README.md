[![Gitpod Ready-to-Code](https://img.shields.io/badge/Gitpod-Ready--to--Code-blue?logo=gitpod)](https://gitpod.io/#https://github.com/inteclix/lumen) 

# angela


# linking storage/public folder to public
ln -s /home/seddik/angela-server-app/storage/app/public /home/seddik/angela-server-app/public

# make folder or database accessible from www-data
chmod -R 775 storage/*
chmod -R 775 database/*