# Usage : $ ruby(1.8|1.9) generateUsers.rb <username in the intended manner> 
# for example, to make a user with name GeneralRetard, add a text file in lowercase inside
# /blurbs/generalretard.txt and an avatar in /avatars/generalretard.(png|jpg) 
# (default.png will be used as the default avatar) and run 'ruby generateUser.rb GeneralRetard'
# == INCOMPLETE ==


%w[erb fileutils].map { |r| require r};

USER_SLUG = ERB.new <<-EOF
				<h4><%= userName %></h4>
				<p>
					<img  align="left" src="images/<%= userName.downcase %>.jpg" alt="<%= userName %>" />
					<br />
					lorem ipsum, foo bar. foo foo barber
				</p>
				<!-- end of a hacker -->
EOF
(userName = ARGV[0]); puts USER_SLUG.result(binding).gsub(/^  /, '');  
