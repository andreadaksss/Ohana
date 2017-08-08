<?php DOESNT WORK?>

var tree = <?php echo $tree;?>;
var tree2 = <?php echo $tree2;?>;

for (var i in tree)
{
    var user = tree[i];

    setupDiagram(myDiagram,
    [
        // { key: user.id, n: user.uFirstname, s: user.uGender, m: user.mFirstname, f: user.fFirstname }
        { key: 0, n: user.uFirstname, s: user.uGender, m: 3, f: 4, vir: 1},
        { key: 1, n: user.sFirstname, s: user.sGender },
        { key: 3, n: user.mFirstname, s: user.mGender, vir: 4 },
        { key: 4, n: user.fFirstname, s: user.fGender  },
        { key: 5, n: user.cFirstname, s: user.cGender, m: 0, f: 1 },
    ], 0);
}
-------------------------------------------------------------------
var data = [];
tree.forEach(function(item){
    data.push(item)
});
console.log(tree[i]);
-------------------------------------------------------------------
var data = [];
tree.forEach(function(item){
    data.push("{ key: " + item.id 
            + ", n: " + item.uFirstname 
            + ", s: " + item.uGender 
            + ", m: " + item.mFirstname  
            + ", f: " + item.fFirstname 
            + ", vir: " + item.sFirstname + "}")
    setupDiagram(myDiagram, data, 0);
});
-------------------------------------------------------------------
var userObj = new Object();
var data = [];

tree.forEach(function(user){

    userObj = {
        keys: user.uFirstname,
        n: user.uFirstname,
        s: user.uGender,
        m: user.mFirstname,
        f: user.fFirstname,
        vir: user.sFirstname
    };

    data.push(userObj);

    userObj = null;
});

setupDiagram(myDiagram, data, 0);
---------------------------------------------------------------------------------------------------------------------
<?php TreeController.php ?>

$tree2 = DB::table('users')
        ->join('spouses',   'users.id',     '=', 'spouses.sUid')
        ->join('children',  'users.id',     '=', 'children.cUid')
        ->join('mothers',   'users.id',     '=', 'mothers.mUid')
        ->join('fathers',   'users.id',     '=', 'fathers.fUid')
        ->select('users.*', 'spouses.*', 'children.*', 'mothers.*', 'fathers.*')
        ->orderBy('users.id')
        ->chunk(100, function($users) {
            foreach($users as $user) {

            }
        });

return view('genogram.sample1mine', array('tree' => $tree, 'tree2' => $tree2));
---------------------------------------------------------------------------------------------------------------------
<?php DOESNT WORK?>

var tree = <?php echo $tree;?>;
var query = <?php echo $query;?>;

for (var i in tree)
{
    for (var j in query)
    {
        var user = tree[i];
        var user2 = query[j];

        setupDiagram(myDiagram,
        [
            // { key: user.id, n: user.uFirstname, s: user.uGender, m: user.mFirstname, f: user.fFirstname }
            { key: 0, n: user.uFirstname, s: user.uGender, m: 3, f: 4, vir: 1},
            { key: 1, n: user.sFirstname, s: user.sGender },
            { key: 2, n: user.cFirstname, s: user.cGender, m: 0, f: 1 },
            { key: 3, n: user.mFirstname, s: user.mGender, vir: 4 },
            { key: 4, n: user.fFirstname, s: user.fGender  },
            // spouse parents
            { key: 5, n: user2.mFirstname, s: user2.mGender, vir: 6 },
            { key: 6, n: user2.fFirstname, s: user2.fGender  },
        ], 0);
    }
}
---------------------------------------------------------------------------------------------------------------------
<?php MOST RECENT that kinda works ?>

var tree = <?php echo $tree;?>;

for (var i in tree)
{
    var user = tree[i];

    setupDiagram(myDiagram,
    [
        // { key: user.id, n: user.uFirstname, s: user.uGender, m: user.mFirstname, f: user.fFirstname }
        // { key: 0, n: user.uFirstname, s: user.uGender, m: 3, f: 4, vir: 1},
        { key: 0, n: user.uFirstname, s: user.uGender, m: 3, f: 4},
        // { key: 1, n: user.sFirstname, s: user.sGender },
        // { key: 2, n: user.cFirstname, s: user.cGender, m: 0, f: 1 },
        { key: 3, n: user.mFirstname, s: user.mGender, vir: 4 },
        { key: 4, n: user.fFirstname, s: user.fGender  },
    ], 0);
    
}