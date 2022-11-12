<!-- Comments -->
<div class="ui small threaded comments" >

{{#each all}}

    <div class="comment">
        <a class="avatar d-none">
            <i class="user icon fs-2"></i>
        </a>
        <div class="content ms-0">
            <a class="author"> {{name}} </a>
            <div class="metadata">
                <span class="date"> {{date}} </span>
                <div class="rating d-none">
                    <i class="star icon"></i>
                    {{likes}} Faves
                </div>
            </div>
            <div class="text"> {{comment}} </div>
            <div class="actions">
                <a class="reply">Reply</a>
            </div>
        </div>

        {{#if ($not_empty_array replies)}}

        <div class="comments m-0">

            {{#each replies}}

                <div class="comment">
                    <a class="avatar d-none">
                        <i class="user icon fs-2"></i>
                    </a>
                    <div class="content ms-0">
                        <a class="author"> {{name}} </a>
                        <div class="metadata">
                            <span class="date"> {{date}} </span>
                            <div class="rating d-none">
                                <i class="star icon"></i>
                                {{likes}} Faves
                            </div>
                        </div>
                        <div class="text"> {{comment}} </div>
                        <div class="actions">
                            <a class="reply">Reply</a>
                        </div>
                    </div>
                </div>

            {{/each}}

        </div>

        {{/if}}

    </div>

{{/each}}

</div>
<!-- End Comments -->
