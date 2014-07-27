Happening Now
=====================

Working title: Happening Now

A project to migrate the "DBC blog" into a community magazine that provides visibility into all manner of DBC activities. This project is a function of the Marketing Circle, with project management happening in Trello. 

- Project lead: Lia James lia@devbootcamp.com 
- Product lead: Jonathan Eyler-Werve jonathan@devbootcamp.com 

Some things to know: 

### Strategy 

Lia and Jonathan worked on this, and will explain more later. 

In short: our goal is to make the expereince of DBC visible to prospective students. We will answer the questions, "What can you build after this program?" and "Does anyone get hired after these programs" with direct evidence. 

We will do this by engaging with current students as storytellers documenting the work they do at DBC. As students graduate, we'll roll out ways to let them tell the story of what happened next. Anticipated side benefits include program visibility to employers and closer cohort cohesion post-grad. 

### CMS 

We are using a CMS because it includes more people in the storytelling process. Managing a CMS is not cost free, but the value provided by allowing the marketing team to add content and make edits without technical staff assistance massively outweights the CMS management costs, in Jonathan's opinion. 

We are using WordPress because 

- it is the [clear market leader](http://w3techs.com/technologies/overview/content_management/all) and is trending more so
- marketing team already knows it 
- widely available skill set in future marketing hires (unlike, say, git) 
- stable, easy to use, generally likable
- increasingly enterprise-appropriate, particularly with robust managed hosting and version control possible (see below). 

### Hosting

Current candidate: WP-Engine Personal Plan at $30/mo. 

Hosting will likely be a managed hosting. Requirements: 

- [git deployable](http://wpengine.com/git/) 
- full write access. 
- manage WP-core updates, 
- caching/load balancing
- grow into CDN option. 

With these requirements, only WP-Engine seems to cover all of it. Optional CDN. They also do some basic security scanning, and manage plugin whitelist/blacklists with security and load in mind. Alternatives considered include... 

- WordPress.com suggested by Myles. Doesn't allow full HTML write which is a blocker. We want to pull in content from other applications, as well as control theming, which seems very difficult using only CSS and "widgets" with scripts in them. Hard to use git with widgets.
- Heroku suggested by Matthew. Technically possible (there are buildpacks) but rarely done. Heroku can't provide any managed hosting options services. The arguement for Heroku is one-less-reciept-to-file, which is valid but not a winner in this case. 
- Traditional "one-click" commodity hosting, ala BlueHost. We want git and versioning which they don't do. 

### Branding 

This will be a Dev Bootcamp site (on a subdomain), with UI cues that make it distinct-but-friendly to the www.devbootcamp.com UI. As part of this project, we will develop a brand wrapper that orients users to which department they are in. Our roadmap anticipates three UI departments: the "sales site" (what we have today), the "community site" (this), and a (currently not in development) "learn" site with learn-to-code resources. 

### Process 

Scrum-like project management on Trello. Lia owns vision and project goals, Jonathan implements to her requirement. Buildout happening in August.  

### Ongoing support 

Lia will be community manager and content strategist going forward. Jonathan is exploring ways to fill product owner roll, pending various staffing decisions. Tech Circle is not expected to support this product beyond the occasional reccomendations and keeping DBC core services running (ie SSO). 

### Theming

We're build it in house, starting from the excellent Organic Themes > Response framework. 

### Plugins and extensions

The modular design of WordPress is a selling point, but also a common attack vector. We're going to be very, very thrifty with installing 3rd-party plugins

### License 

WordPress is GPL, our theme framework is GPL, and this repo is a derivative work of both. If distributed, this code must be GPL.  


