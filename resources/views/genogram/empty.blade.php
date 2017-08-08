<script type="text/javascript">
    // no parents
    if(user.mFirstname === null && user.fFirstname === null)
    {
        // no parents, spouse
        if(user.sFirstname !== null)
        {
            // no parents, spouse, child
            if(user.cFirstname !== null)
            {
                setupDiagram(myDiagram,
                [
                    { key: 0, n: user.uFirstname, s: user.uGender, vir: 3 }, // user
                    { key: 3, n: user.sFirstname, s: user.sGender }, // spouse
                    { key: 4, n: user.cFirstname, s: user.cGender, m: 0, f: 3 } // child
                ], 0);
            }
            // no parents, spouse
            else if(user.cFirstname === null)
            {
                setupDiagram(myDiagram,
                [
                    { key: 0, n: user.uFirstname, s: user.uGender, vir: 3 }, // user
                    { key: 3, n: user.sFirstname, s: user.sGender } // spouse
                ], 0);
            }
        }
        // no parents
        else if(user.sFirstname === null)
        {
            // no parents, child
            if(user.cFirstname !== null)
            {
                setupDiagram(myDiagram,
                [
                    { key: 0, n: user.uFirstname, s: user.uGender }, // user
                    { key: 4, n: user.cFirstname, s: user.cGender, m: 0 } // child
                ], 0);
            }
            // no parents
            else if(user.cFirstname === null)
            {
                setupDiagram(myDiagram,
                [
                    { key: 0, n: user.uFirstname, s: user.uGender, f: 2 }, // user
                ], 0);
            }
        }
    }
</script>