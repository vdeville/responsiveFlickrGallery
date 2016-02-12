# Responsive Flickr Gallery

### Installation:
- ###### Download and unzip OR clone repo in your current project
- ###### In your page(.php) include this library:
 ```
 Head of page:
 <?php require_once ("responsiveFlickrGallery/responsiveFlickrGallery.php") ?>
 
 In your head:
 <link rel="stylesheet" href="responsiveFlickrGallery/responsiveFlickrGallery.css">
 
 After jQuery load:
 <script src="responsiveFlickrGallery/responsiveFlickrGallery.js"></script>
 ```
- ###### In responsiveFlickrGallery/responsiveFlickrGallery.php modify your API key:
 ```
 Example:
define ("apiKey", "YOUR API KEY");
 ```
 - ###### Create the container where gallery is display (for example):
 ```
 <div class="container-fluid" id="responsiveGallery"> </div>
 ```
 - ###### Call the display with PHP (for example):
 ```
 134924252@N08 is your user id of flickr
 <?php echo displayAlbum(getAlbumsIDs("134924252@N08"), "134924252@N08") ?>
 ```
 - ###### Great ! It's work !
### Requirements

##### This code require:

* ###### PHP
* ###### Bootsrap
* ###### Flickr Account with public profil



###### Mention if use is appreciated ;)