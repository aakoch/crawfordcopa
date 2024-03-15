# Coding Standards

In order to keep up with changing standards, reduce outdated code, and maintain the site, I have a few wishes:

1. No spaces or symbols besides underscores and dashes in filenames
2. HTML files must have the extension ".html" (until we have a templating language -- see below)
2. No more use of the following tags
  - &lt;font&gt;
  - &lt;center&gt;
4. Tag names and their attributes must be lowercase
5. No attributes in the &lt;body&gt; tag. 
6. Replace "name" with "id" in your anchors. Ex: `<a name="1832A"></a>` should now be `<a id="1832A"></a>`
7. No more use of `&nbsp;` nor `<table>`s used for layout.
8. Fractions should be added using their appropriate HTML entity: `&frac##;` eg: 1/2 is `&frac12;`
9. Styles should be, but is not required, in style.css or a page-specific external CSS file. Avoid using styles on individual tags through the "style" attribute.


## Making Changes

My new host is absolutely free as long as we stay under the allow amount of these resources:
1. 100GB /month of bandwidth
2. 300 minutes /month of "build minutes"
3. 2.5k of "large files"
4. Some other stuff we don't use

I'm not really concerned about bandwidth, a little concerned with the "large files" as it isn't clear if the large files is the same as the web content, and mostly concerned with build minutes. 
With the old host, it made sense for you to make changes, save them, refresh the page to see them and repeat. 

Unfortunately, with the new host, each time you save, it marks the "repository" (the files on Github) as having a new version. This is not the usual workflow for development. 
Usually, the programmer will make many saves on his local machine and when s/he's ready, they will push a batch of them to the repo(sitory). 
Then 1 build is kicked off instead of one for each save the developer did on their machine.

Can you see where I'm going? 

When a build is running, a clock is started to keep track of the amount of time spent building the site. For anything under a minute, it is rounded up. 
That means, for every save, you use 1 build minute (as of today). And with only 300 a month it's very likely we will go over that allotment with the way things are now.

### Proposals

We can deal with this several different ways.

#### 1. Upgrade from the free plan to the paid plan. 

This increases the number of build minutes to *25k* minutes /month. No worries using more than that. The paid plan costs $19 /month however.

#### 2. Stay with the free plan and pay the "overage" charge

We can stay on the free plan and if we go over 300 minutes we are charged $7 every 500 minutes we go over. I'm pretty sure we wouldn't use more than 800 minutes a month.

#### 3. Turn off automatic builds

According to the documentation, but not tried by myself, you can set up a URL that you go to to kick off a build. It might be as easy as going to a webpage.  
We would turn off the link that builds every time you save and instead would go to
a URL to start a build. Downside to this is you don't get to see changes after every edit and would have to manually go to a web page and wait 1 minute and then see your changes.

#### 4. Develop locally

To follow the workflow usually used in these instances, you would develop locally and push changes less frequently.  Developing locally has the benefit of allowing you to make changes and see immediately what it looks like. 
A lightweight web server is spun up on your machine (only visible to you) and the site is served from it. To develop locally you would need some HTML editing software and some local build tools. All of this 
is free. But there is a learning curve associated with this and that might be a cost you're not comfortable with.


## Future development

I would also like to use a templating language. 
A templating language allows for common code to be shared across the site. And since a bundler is used to compile the templates, it also
reduced page sizes and optimizes the site.
I haven't decided for sure but some options include Pug (my favorite), Nunjucks, Handlebars, etc. 
