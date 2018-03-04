# AwesomeCo Reporting system v1

This is very simple system of reporting  using symfony 2.8 
###Requirements

* MySQL 5 Or higher
* [Check symfony 2.8 requirements](https://symfony.com/doc/2.8/reference/requirements.html)

###Installation

1- clone the project file.

2- composer install to Installing Dependencies and load the vendor .

3- Then Import the attached database (dataBase.sql)

##brief description of the approach 

- **(A)** is the current one **(B)** improvements or suggestions

### structurs


 
 **Routes**
 
  
  
 **(A)** I used annotation routes (routes inside the controller) because the project is simple and it contains one module.
 
 **(B)** We can make files for routes of the project incase the project expanded and we needed to make bundles or modules.



### DataBase 

**(A)** Schema contains one database table with the following fields.

```bash
id|parent_id|name|description|type|justification|priority|cause|latitude|longitude|approved|created_at|updated_at.
```
- parent_id: is the connection between the original report and the modification

**(B)** We can make two table **one** as reports **second** as display for just the approved reports to reduce the load on the table 

### frontend and beautifications

**(A)** I just used bootstrap for design and tabs to separate **General reports** from **Site reports** .

**(B)** we can use **JQuery** and **AJAX** to speed up the hole project and reduce number of pages has been made to just two pages.



### The process
 
 #### - report cases
**1** - new report ( approve = 0 )

**2** - Manager actions 
  
    a- Approve  the report (current report approve = 1 & parent approve = 0) 
    b- Rejct the report (current report approve = 2)
    c- Delete the report 
    
