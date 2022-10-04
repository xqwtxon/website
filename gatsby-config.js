module.exports = {
  siteMetadata: {
    // Site URL for when it goes live
    siteUrl: `https://xqwtxon.ml/`,
    // Your Name
    name: 'xqwtxon',
    // Main Site Title
    title: `xqwtxon | Computer Engineering`,
    // Description that goes under your name in main bio
    description: `I do alot of minecraft related things.`,
    // Optional: Twitter account handle
    author: `@xqwtxon`,
    // Optional: Github account URL
    github: `https://github.com/xqwtxon`,
    // Optional: LinkedIn account URL
    linkedin: `https://www.linkedin.com/in/xqwtxon/`,
    // Content of the About Me section
    about: `Hello, I am making projects and growing up of them. I am reverse-engineering since 2019, Computer Analytics of Engineering since 2016`,
    // Optional: List your projects, they must have `name` and `description`. `link` is optional.
    projects: [
      {
        name: 'ProfanityFilter',
        description:
          'A best profanityfilter for chat with api for plugin developers!',
        link: 'https://github.com/xqwtxon/ProfanityFilter',
      },
      {
        name: 'QwertyClicker',
        description:
          'A homemade interface autoclicker using C# in Windows for Minecraft Bedrock & Java!',
        link: 'https://github.com/xqwtxon/QwertyClicker',
      },
      {
        name: 'BetterModeration',
        description:
          'A plugin contains best moderations. It measure from player to their violations in certain at in-game.',
        link: 'https://github.com/xqwtxon/BetterModeration',
      },
    ],
    // Optional: List your experience, they must have `name` and `description`. `link` is optional.
    experience: [
      {
        name: 'ReinfyTeam',
        description: 'Full-Stack Developer, July 2022 - Present',
        link: 'https://github.com/ReinfyTeam',
      },
      {
        name: 'PrideMC Network',
        description: 'Full-Stack Developer, December 2016 - Present',
        link: 'https://github.com/PrideMC',
      },
      {
        name: 'EclipsePE Network',
        description: 'Full-Stack Developer, July 2022 - Present',
        link: 'https://github.com/xqwtxon',
      },
    ],
    // Optional: List your skills, they must have `name` and `description`.
    skills: [
      {
        name: 'Languages & Frameworks',
        description:
          'JavaScript (ES6+), Golang, Node.js, Express.js, React, Ruby on Rails, PHP',
      },
      {
        name: 'Databases',
        description: 'MongoDB, PostreSQL, MySQL',
      },
      {
        name: 'Other',
        description:
          'Docker, Amazon Web Services (AWS), CI / CD, Microservices, API design, Agile / Scrum',
      },
    ],
  },
  plugins: [
    `gatsby-plugin-react-helmet`,
    {
      resolve: `gatsby-source-filesystem`,
      options: {
        name: `images`,
        path: `${__dirname}/src/images`,
      },
    },
    {
      resolve: `gatsby-source-filesystem`,
      options: {
        path: `${__dirname}/content/blog`,
        name: `blog`,
      },
    },
    {
      resolve: `gatsby-transformer-remark`,
      options: {
        plugins: [
          {
            resolve: `gatsby-remark-images`,
            options: {
              maxWidth: 590,
              wrapperStyle: `margin: 0 0 30px;`,
            },
          },
          {
            resolve: `gatsby-remark-responsive-iframe`,
            options: {
              wrapperStyle: `margin-bottom: 1.0725rem`,
            },
          },
          `gatsby-remark-prismjs`,
          `gatsby-remark-copy-linked-files`,
          `gatsby-remark-smartypants`,
        ],
      },
    },
    `gatsby-transformer-sharp`,
    `gatsby-plugin-sharp`,
    `gatsby-plugin-postcss`,
    `gatsby-plugin-feed`,
    {
      resolve: `gatsby-plugin-google-analytics`,
      options: {
        trackingId: `ADD YOUR TRACKING ID HERE`, // Optional Google Analytics
      },
    },
    {
      resolve: `gatsby-plugin-manifest`,
      options: {
        name: `devfolio`,
        short_name: `devfolio`,
        start_url: `/`,
        background_color: `#663399`,
        theme_color: `#663399`, // This color appears on mobile
        display: `minimal-ui`,
        icon: `src/images/icon.png`,
      },
    },
  ],
};
