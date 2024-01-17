<?php require 'header.php'; ?>

<main>
    <form class="bg-primary" action="https://httpbin.org/get" method="get">
        <div class="prenom">
            <label for="Nom"> Nom : </label>
            <input id="Nom" name="nomdefamille" type="text" required>
        </div>
        <div class="genre">
            Homme:<input type="radio" name="Genre" value="homme">
            Femme:<input type="radio" name="Genre" value="femme">
        </div>
        <div class=vieux><label for="blabla">Age : </label>
            <select id="blabla" name="age">
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
                <option>24</option>
                <option>25</option>
                <option>26</option>
                <option>27</option>
                <option>28</option>
                <option>29</option>
                <option>30</option>
            </select>
        </div>
        <div class="zone">
            <label for="listee">Votre message : </label>
            <textarea id="listee" name="probleme" rows="8" cols="30"></textarea>
        </div>
        <div class=""
        <label for="email">Votre email :<label>

                <input type="email" id="email" pattern=".+@example\.com" size="30" required />


                <button type="submit">Envoyer</button>
    </form>
</main>



<?php require 'footer.php'; ?>
