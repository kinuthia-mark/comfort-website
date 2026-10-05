# Comfort Executive Suites Website

![HTML5](https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?logo=css3&logoColor=white)
![GitHub Pages](https://img.shields.io/badge/hosted%20on-GitHub%20Pages-222?logo=github&logoColor=white)

The website for **Comfort Executive Suites**, a hotel on Magadi Road in Ongata Rongai, Kenya. It shows guests the rooms and rates, the dining options and photos of the property, and tells them how to get in touch.

**Live site:** <https://kinuthia-mark.github.io/comfort-website/>

It is a static site: plain HTML and CSS with no build step and no framework, so it loads quickly on mobile data and can be hosted anywhere.

## Pages

| Page | File | What is on it |
|------|------|---------------|
| Home | `index.html` | Welcome banner, services, guest reviews, photo preview |
| Accommodation | `accommodation.html` | Rate table and the three room types: Studio, Executive Suite, VIP Suite |
| Dining | `food.html` | Restaurant, chefs, special offers, private dining and events |
| Gallery | `gallery.html` | Photo grid of rooms, dining and grounds |
| About Us | `about.html` | The hotel's story, mission and values |
| Contact | `contact.html` | Phone, email, social media links and a Google Map |

```mermaid
flowchart LR
    Home[index.html] --> Acc[accommodation.html]
    Home --> Food[food.html]
    Home --> Gal[gallery.html]
    Home --> About[about.html]
    Home --> Contact[contact.html]
```

Every page shares the same header (menu, logo, Contact Us link) and footer.

## Design

- Black and reddish-orange colour scheme
- Lora for headings and Open Sans for body text (Google Fonts)
- Full-width photos with text overlays on the home page
- Hover effects on gallery images
- Each page has its own `<meta name="description">` so search results show a useful summary

### Mobile layout

`CSS/mobile.css` holds the media queries. On small screens the text is resized, the header stacks, and the photos scale to the screen width.

## Project structure

```text
comfort-website/
├── index.html
├── accommodation.html
├── food.html
├── gallery.html
├── about.html
├── contact.html
├── CSS/
│   ├── styles.css     # Shared base styles: fonts, header, footer
│   ├── index.css      # Home page sections and image overlays
│   ├── gallery.css    # Gallery grid and hover effects
│   ├── table.css      # Rate table on the accommodation page
│   ├── contact.css    # Contact page layout
│   └── mobile.css     # Media queries for phones and small tablets
└── images/            # Room, dining and building photos, plus the logo
```

## Running it locally

No install is needed. Either open `index.html` in a browser, or serve the folder so the links behave exactly as they do online:

```bash
git clone https://github.com/kinuthia-mark/comfort-website.git
cd comfort-website
python -m http.server 8000
```

Then open <http://localhost:8000>.

## Deployment

The site is published with GitHub Pages from the `master` branch. Any change merged into `master` goes live within a minute or two.

## Analytics

Each page includes the Meta Pixel, so visits from Facebook and Instagram adverts can be measured in Meta Events Manager.

## Ideas for next steps

- Online booking form or a booking calendar
- Compress the photos (WebP) to make the pages load faster
- A virtual tour of the rooms
- Seasonal offers section that is easy to update

## Author

**Mark Kinuthia** - [github.com/kinuthia-mark](https://github.com/kinuthia-mark)
