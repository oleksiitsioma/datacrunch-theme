fetch("https://data-crunch.ddev.site/wp-json/dcpapi/v1/portfolio")
    .then((response) => response.json())
    .then((data) => renderPosts(data));

const renderPosts = ( arr ) => {

    const recentContainer = document.getElementById('recent-portfolio-container');

    arr.forEach(el => {
        const post = document.createElement('div');
        post.className = 'columnGrid__column columnGrid__column_6 columnGrid recentPortfolio';

        const thumbnail = document.createElement('img');
        thumbnail.className = 'columnGrid__column columnGrid__column_4 recentPortfolio__thumbnail';
        thumbnail.setAttribute( 'src' , el.thumbnail);
        post.appendChild(thumbnail);

        const postContent = document.createElement('div');
        postContent.className = 'columnGrid__column columnGrid__column_8';

        const title = document.createElement('h3')
        title.className = 'recentPortfolio__title'
        title.textContent = el.title;
        postContent.appendChild(title);

        const skills = document.createElement('p');
        skills.className = 'recentPortfolio__skills';
        let skillsArr = [];
        el.skills.forEach(skill => {
            skillsArr.push(skill.name);
        });
        skills.textContent = skillsArr.join(', ');
        postContent.appendChild(skills);

        const excerpt = document.createElement('p');
        excerpt.className = 'recentPortfolio__excerpt';
        excerpt.textContent = el.excerpt;
        postContent.appendChild(excerpt);

        post.appendChild(postContent);

        recentContainer.appendChild(post)
    });
}