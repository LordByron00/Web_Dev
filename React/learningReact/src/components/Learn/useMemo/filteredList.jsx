import { useMemo, useState } from "react";

const filteredList = ({ items }) => {
    const [query, setQuery] = useState("");

    const filteredItems = useMemo(() => {
                return items.filter(item => item.toLowerCase().includes(query.toLowerCase()));
    }, [items, query]);
    
    return(
        <>
            <input type="text" name="" id="" value={query} onChange={e => setQuery(e.target.value)}/>
            <ul>
                {filteredItems.map(i => <li key={i}>{i}</li>)}
            </ul>
        </>
    );
}

export default filteredList;