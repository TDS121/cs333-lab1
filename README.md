# cs333-lab1
Do each step below, and **answer the questions right here in this `README.md` file** as you go (type your answers under each question).

**How this lab works (two things to hand in):**
- **Your code:** make your own copy of this lab (click **Use this template**, or clone it),
  do your work, and **push it to your own GitHub repo** so I can see your code.
- **Your live form:** **SFTP the form pages to your web folder on `lampforall`** so the form
  actually runs on the LAMP stack.

You'll submit links to both in Moodle (see the last step).

1. Do you have your simple apache website already set up? 
Yes lAmp is set up

2. What is your URL?
`https://lampforall.cis251296.projects.jetstream-cloud.org/students/tristan/index.html`

3. As always, you can do the minimum, or you can go further than the assignment and embellish your work- highly encouraged.
4. Put these two html files included in this lab1 repo in your local site. View them with live preview, and make sure they are visible locally.
5. Link these two files to your index.html page, both ways so I can go to all pages from each page via hyperlinks.
6. Test all of this locally.
7. However you have your SFTP set up, upload the pages to your site, and fill out information in the forms.html and hit submit
8. Do you see results in the submit.html file? Why or why not? Do you see results in the URL bar? Why does this happen?
I was directed to the submit page but it still had the same content and there was no change. The results changed the url so it was sent to the server and not actually any change on the actual page. The reason why `submit.html` didnt change was because it is a static file.

9. Describe in a few sentences how the html form works.
In `form.html` the action says where to send the data I just put in.  The method says how (through a GET request). Each of the inputs becomes a label for the answer I provided.

10. What do GET and POST mean in this context?
GET puts the data in the url and post sends it in the request body so its not in the url, this is usually done to keep sensitive data out of the address bar

11. What would we need to do to make the submit.html page display what was filled out in the form?
There needs to be some sort of code that reads the data that I submitted and then writes them to the page. Reading ahead, the PHP seems to be the thing that does it.

12. Add code to make the submit page display the form information, then upload it and check that it works.
    HINT: our server runs **PHP**, so make the page a PHP page:
    - Rename `submit.html` to `submit.php`, and point the form's `action` at `submit.php`.
    - In `submit.php`, read the submitted values with PHP — e.g. `$_GET['name']` (or
      `$_POST['name']` if you switch the form's method to POST) — and echo them into the page.
    - Wrap each value in `htmlspecialchars(...)` before you echo it, so no one can inject
      HTML or script through the form. Why does that matter?
    - NOTE: PHP only runs on the **server** — VS Code Live Server / local preview will NOT
      execute it (you'll just see nothing or raw code). Test your `.php` by uploading it and
      opening the page at your `.../students/yourname/` URL.
13. Describe what a static HTML site is, the limitations of this type of site
14. What kind of non-static site would we need to be able to store the form information? Give an example of a configuration that will enable a form to accept data and store it persistently.

15. Push this repo — the lab **files** and this **README.md** (with your answers filled in) — to **your own GitHub repo**.
16. Submit in Moodle two links: (1) your GitHub repo, and (2) your live site showing the working form. Labs are submitted in Moodle every week — that is how I receive your work.
