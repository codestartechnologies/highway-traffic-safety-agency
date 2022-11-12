<!-- Comments -->
<div class="ui small feed" >

{{#each all}}

    <div class="event">
        <div class="label d-none">
            <i class="circular user icon"></i>
        </div>
        <div class="content ms-0">
            <div class="summary">
                <a href=""> {{name}} </a> added a comment
                <div class="date"> {{date}} </div>
            </div>
            <div class="extra text"> {{comment}} </div>
            <div class="meta">
                <a class="like">
                    <i class="like icon"></i>

                    {{#if ($not_empty likes)}}

                        {{likes}} likes

                    {{/if}}

                </a>
            </div>
        </div>
    </div>

    {{#if ($not_empty_array replies)}}
        {{#each replies}}

            <div class="event">
                <div class="label d-none">
                    <i class="circular user icon"></i>
                </div>
                <div class="content ms-0">
                    <div class="summary">
                        <a href=""> {{name}} </a> replied to <a href=""> {{reply_name}}'s</a> comment
                        <div class="date"> {{date}} </div>
                    </div>
                    <div class="extra text"> {{comment}} </div>
                    <div class="meta">
                        <a class="like">
                            <i class="like icon"></i>

                            {{#if ($not_empty likes)}}

                                {{likes}} likes

                            {{/if}}

                        </a>
                    </div>
                </div>
            </div>

        {{/each}}
    {{/if}}

{{/each}}

</div>
<!-- End Comments -->
