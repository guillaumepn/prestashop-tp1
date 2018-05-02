{if $enabled_comments || $enabled_grades}
    <div id="comments-block">
        <div class="tabs">
            <h3 class="page-product-heading">Commentaires sur ce produit</h3>

            <form method="post">
                {if $enabled_grades}
                    <div class="form-group">
                        <label for="">Note :</label>
                        <select name="grade" class="form-control">
                            <option>Choisissez une note</option>
                            {for $value=1 to 5}
                                <option value="{$value}">{$value}</option>
                            {/for}
                        </select>
                    </div>
                {/if}
                {if $enabled_comments}
                    <div class="form-group">
                        <label for="">Commentaire :</label>
                        <textarea name="comment" class="form-control"></textarea>
                    </div>
                {/if}
                <button type="submit" name="submit-form-customer" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
    </div>
{/if}