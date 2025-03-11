/*
    how to access props in functional component
*/

function PropsDemo1(Props){
    return <>
        <h1>Example of Props Demo in functional component</h1>
        <h1>Welcome {Props.fname}</h1>
    </>
}

export default PropsDemo1;