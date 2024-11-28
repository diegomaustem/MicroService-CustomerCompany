#Commands - Required

::: Build Image Docker in directory nginx 
  -> docker build -t server-nginx .
  
::: Container up with volumes 
  -> docker run -d --name virtual-nginx -p 88:88 -v $(pwd)/../company-app:/var/www/company/ -v $(pwd)/../customer-app:/var/www/customer/ server-nginx

::: Access EndPoints
  -> http://localhost:88/api/v1/company/company
  -> http://localhost:88/api/v1/customer/customer
