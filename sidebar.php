<aside class="side-bar">
    <div class="group search-bar input-group sm">
        <input type="text" placeholder="Enter URL:"/>
        <button class="button button-secondary button-shape">
            جستجو
        </button>
    </div>

    <div class="group  recent-post">
        <h5>Recent posts</h5>

        <article>
            <div class="row">
                <div class="col col-xs-3">
                    <div class="img">
                        <img src={item.image} alt="alt"/>
                    </div>
                </div>
                <div class="col col-xs-9">
                    <div class="content">
                        <h3>{item.title}</h3>
                        <p>
                            <span class="name">{item.user.name}</span>
                            <span class="date">{item.createdAt}</span>
                        </p>
                    </div>
                </div>
            </div>


        </article>
    </div>


    <div class="group  categories">
        <h5>Categories</h5>

        <ul>
            <a href="#">
                <li>
                    <strong>{item.name}</strong>
                    <span>({item.count})</span>
                </li>
            </a>
        </ul>
    </div>

    <div class="group  tags">
        <h5>Tags</h5>
        <ul>
            <a href="#">
                <li>{item.name}</li>
            </a>
        </ul>
    </div>
</aside>
