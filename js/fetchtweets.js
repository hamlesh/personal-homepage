    getTwitters('tweets', {
        id: 'hamlesh',
        prefix: '',
        clearContents: false, // leave the original message in place
        count: 1,
        withFriends: true,
        ignoreReplies: true,
        newwindow: true,
        template: '<a href="http://twitter.com/%user_screen_name%/" target="_twitter"><img id="tweetsicon" src="images/twitter.png"><b>%user_screen_name%</b></a> said: %text% <a href="http://twitter.com/%user_screen_name%/" target="_twitter">%time%</a>'
    });

