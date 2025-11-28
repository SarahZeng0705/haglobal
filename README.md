Instructions
There are a total of 5 pages on the site:
Home: Introduces what H&A is and why customers should consider H&A.
Services: Displays the services currently offered by H&A, each with a short description and a button that links to the specific service pages.
Fire Safety and ESG Consultancy: Provides detailed information about this service.
Contact Us: Includes a form that users can fill out. Their responses are stored in a database so the business owner can reply.

Both the header and footer contain a navigation menu with hyperlinks to each page.

Base Issue
The site uses root-relative paths for URLs, which may break if the project folder is stored in different locations. To prevent incorrect linking, a base.php file is created and included in every PHP page. Please update the base value inside base.php before running the site.

Organization and Architecture
Related content is grouped together for clarity. The header and footer are stored as templates and included on every page to maintain consistency. The two service detail pages are placed inside the services folder to reflect the site's hierarchy.

Database, Form validation
Users can submit a “Contact Us” form, and if the fields pass PHP validation, the data will be stored in the database.
After submission, an inquiry ID is displayed so users can keep it as a reference for future follow-up.

Animations
On the mobile version, the header shrinks when the user scrolls. This effect is created using a CSS animation applied through the shrink class.

Grid/Flexbox Layout
Most desktop layouts use CSS Grid to position and arrange images and text. Lists use Flexbox so they can switch between horizontal and vertical alignment as needed.

jQuery functionality
On the mobile layout, a menu button is implemented. When clicked, the collapsed navigation appears and the background dims. A “Learn More” button is also included for the mobile About Us section; the extended content only appears when clicked. The header shrinking effect is also handled with jQuery. Additionally, an image lightbox effect is implemented—when an image is clicked, it appears centered on the screen.

Accessible and responsive
All images include descriptive alt text, and semantic elements like <nav> are used for accessibility. The mobile and desktop layouts are designed separately to accommodate different screen sizes and viewing experiences.

Hosting
This site is currently hosted at https://www.haglobal.net.
