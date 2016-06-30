#TIM Website - https://tim-hyp.herokuapp.com/

##University Project
This is the GitHub repository for the TIM website project built within the HYPERMEDIA APPLICATIONS course at Politecnico di Milano University.

Developed by:
- Georgy Shabunin
- Gabriele Maddalena

##Techs

###Web Application
This application is built with **[Laravel](http://laravel.com/)**, an open source PHP Framework, which provides tools needed for developing robust web apps. The developed application benefits from IOC container, expressive migration system, database seeding mechanism, ORM, MVC architecture and many other features of the framework, while enjoying its preference for "Convention over Configuration" paradigm.

**Bootstrap** and **JQuery** were used to design intuitive and responsive frontend user experience.

The application is running on **Heroku**. As a PaaS, Heroku provides easy setup. Moreover, it uses Git version control system to deploy apps.

The entire storage infrastructure is offloaded to **AWS S3**, which is used for reliable storage and upload of static assets(images, css and js).

###Mobile Application

Mobile application was developed with **Phonegap**, which allows the web application to run in a webview and interact with native API on mobile device. **Phonegap Build** web service was used for rapid application deployment, starting from [github repository](https://github.com/twist900/tim-hyp-mobile).