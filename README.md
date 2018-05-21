## Description
This project is funded by a grant from the National Institute of General Medical Sciences of the National Institutes of 
Health under award number 2R01GM082949. The goal of the Cell Image Library (CIL) is to create a valuable research tool 
to promote analysis and new discoveries. The CIL seeks images from all organisms, cell types, and processes, normal 
and pathological. Image quality should be as high as possible, within the limitations imposed by the then current state of readily available imaging technology 
and constraints imposed by the biological specimen.

This repository contains the source code that implements the CIL website. The CIL website contains the features
such as the general keyword search, the advanced ontology search, the interactive cells, and the image display. The CIL
utilizes Elasticsearch as the NoSQL JSON search engine.  The CIL website communicates with the internal REST service API,
for the queries and tracking the statistics. The CIL is implemented in PHP. It relies on the CodeIgniter to maintain 
the Model View Controller (MVC) programming structure.

## Dependencies
* PHP 5.4.40+
* CodeIgniter 3.0.4
* Apache server 2.4


## Libraries
* PHP curl library
* [codeigniter-restserver](https://github.com/chriskacerguis/codeigniter-restserver)


CodeIgniter https://www.codeigniter.com/

codeigniter-restserver https://github.com/chriskacerguis/codeigniter-restserver

#### Sample URL:
http://localhost/images/2
