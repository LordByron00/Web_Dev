import { useMemo, useState } from "react";

const FilteredList = ({ items }) => {
    const [query, setQuery] = useState("");

    const filteredItems = useMemo(() => {
                return items.filter(item => item.toLowerCase().includes(query.toLowerCase()));
    }, [items, query]);
    
    return(
        <>
            <ul>
                {filteredItems.map(i => <li key={i}>{i}</li>)}
            </ul>
            <label htmlFor="query">Query: </label>
            <input type="text" name="query" id="query" value={query} onChange={e => setQuery(e.target.value)}/>
        </>
    );
}

export default FilteredList;