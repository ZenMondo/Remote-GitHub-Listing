Remote GitHub Listing
by L. Christopher Bird

This php script will create a webpage with a listing of all the files in a GitHub Repository and create hyperlinks to each individual file.

The Repository information is in the variables at the top of the script.
Edit these to point to your GitHub repository.

Since git is svn compatible, we use an svn command to get the directory of a GitHub repository and stores the listinng in an array.
The array is then iterated in a foreach loop and creates a listing with hyperlinks.
